const countdownArea = document.querySelector('.countdown');
const numbersArea = document.querySelector('.numbers');
const resetBtn = document.querySelector('.reset');
let interval;
let count = 0;
const height = countdownArea.getBoundingClientRect().height;
createTimer();
resetBtn.addEventListener('click', createTimer);
function createTimer() {
  clearInterval(interval);
  count = 0;
  numbersArea.style.transform = 'translateY(0)'
     interval = setInterval(() => {
    count++;
     const offset = height * count;
    numbersArea.style.transform = `translateY(-${offset}px)`
       if (count >= 10) {
     clearInterval(interval);
    }
  }, 1000);
}