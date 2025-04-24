
const slides = document.querySelectorAll('.slide');
let current = 0;

const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');
const dotsContainer = document.getElementById('dots');

slides.forEach((index) => {
  const dot = document.createElement('span');
  dot.classList.add('dot');
  if (index === current) dot.classList.add('active');
  dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll('.dot');

function showSlide(index) {
  slides.forEach(slide => slide.classList.remove('active'));
  dots.forEach(dot => dot.classList.remove('active'));
  slides[index].classList.add('active');
  dots[index].classList.add('active');

  prevBtn.classList.toggle('inactive', index === 0);
  nextBtn.classList.toggle('inactive', index === slides.length - 1);
}

function nextSlide() {
  current = (current + 1) % slides.length;
  showSlide(current);
}


function prevSlide() {
  current = (current - 1 + slides.length) % slides.length;
  showSlide(current);
}

nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);

setInterval(nextSlide, 10000);

const menuToggle = document.getElementById('menu-toggle');
const navLinks = document.getElementById('nav-links');

menuToggle.addEventListener('click', () => {
  navLinks.classList.toggle('active');
});

showSlide(current, 10000);

function openPopup() {
document.getElementById('popupOverlay').style.display = 'flex';
}

function closePopup() {
document.getElementById('popupOverlay').style.display = 'none';
}

document.getElementById('jobApplicationForm').addEventListener('submit', function(e) {
  // REMOVE e.preventDefault();
  // Form will submit to your PHP file
  alert('Submitting form...');
});




const jobSlides = document.querySelectorAll('.job-slide');
const jobDots = document.querySelectorAll('.job-dot');
let jobCurrent = 0;

function displayJobSlide(position) {
  jobSlides.forEach((job, i) => {
    job.classList.toggle('active', i === position);
    jobDots[i].classList.toggle('active', i === position);
  });
  jobCurrent = position;
}

function cycleJobSlides() {
  jobCurrent = (jobCurrent + 1) % jobSlides.length;
  displayJobSlide(jobCurrent);
}

setInterval(cycleJobSlides, 5000);


function showForm(type) {
    const signIn = document.getElementById('signInForm');
    const signUp = document.getElementById('signUpForm');

    if (type === 'signin') {
      signIn.classList.add('active');
      signUp.classList.remove('active');
    } else {
      signIn.classList.remove('active');
      signUp.classList.add('active');
    }
  }

  window.onload = () => {
    showForm('signin');
  };
