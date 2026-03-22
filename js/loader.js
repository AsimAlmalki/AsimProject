var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
var sim;
function progressSim(){
	diff = ((al / 100) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 17;
	ctx.fillStyle = 'rgb(83, 126, 161)';
	ctx.strokeStyle = "rgb(83, 126, 161)";
	ctx.textAlign = "center";
	ctx.font="28px monospace";
	ctx.fillText(al+'%', cw*.52, ch*.5+5, cw+12);
	ctx.beginPath();
	ctx.arc(100, 100, 75, start, diff/10+start, false);
	ctx.stroke();


	if(al == 100){
    clearInterval(sim);
    loader.style.display = 'none';
    myModal.show();

    // 🎉 احتفالية
    confetti({
        particleCount: 200,
        spread: 120,
        origin: { y: 0.6 }
    });

    // دفعة ثانية بعد نص ثانية
    setTimeout(() => {
        confetti({
            particleCount: 150,
            angle: 60,
            spread: 80,
            origin: { x: 0 }
        });

        confetti({
            particleCount: 150,
            angle: 120,
            spread: 80,
            origin: { x: 1 }
        });
    }, 500);
}

	al++;
}

    // برمجيه اختيار الرابح

    const win = document.querySelector("#winner");
    const loader = document.querySelector(".loader-con");

    var myModal = new bootstrap.Modal(document.getElementById('modal'), {
        keyboard: false
    })


    win.addEventListener('click', function(){

    // لو فيه عداد شغال نوقفه
    clearInterval(sim);

    // نرجّع القيم للصفر
    al = 0;

    loader.style.display = 'block';

    sim = setInterval(progressSim, 30);
});
