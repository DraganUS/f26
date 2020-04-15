const video = document.getElementById('video');


Promise.all([
    faceapi.nets.tinyFaceDetector.loadFromUri('/js/models'),
    faceapi.nets.faceLandmark68Net.loadFromUri('/js/models'),
    faceapi.nets.faceRecognitionNet.loadFromUri('/js/models'),
    faceapi.nets.faceExpressionNet.loadFromUri('/js/models')
]).then(startVideo);

function startVideo() {
    navigator.getUserMedia(
        { video: {} },
        stream => video.srcObject = stream,
        err => console.error(err)
    )
}

video.addEventListener('playing', () => {
    const canvas = faceapi.createCanvasFromMedia(video);
    document.body.append(canvas);

    const displaySize = { width: video.width, height: video.height };
    faceapi.matchDimensions(canvas, displaySize);
    setInterval(async () => {
        const detections = await faceapi.detectAllFaces(video, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceExpressions()
        const resizedDetections = faceapi.resizeResults(detections, displaySize);
        canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height);
        faceapi.draw.drawDetections(canvas, resizedDetections);
        faceapi.draw.drawFaceLandmarks(canvas, resizedDetections);
        // console.log(detections[0].expressions)
        //
        // vde inportujem vue i pravim event bus objekat i nakacim ga na
        // pre toga inport vue nao na app.js
        // to napisem na lini 2
        window.EventBus = new Vue();
        // gde hocu da pozovem sliku emitujem event

        EventBus.$emit('showImage', detections[0].expressions);
       
        //  drugi parametar samo ako imam
        // faceapi.draw.drawFaceExpressions(canvas, resizedDetections);
    }, 100)
});
