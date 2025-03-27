//LOAD HELLO TEXT WHEN WINDOW IS LOADED
window.onload = function () {
  console.log("JS is running!"); // Confirm it's actually executing

  setTimeout(function () {
    const headline = document.querySelector('.hero__headline');
    console.log('Headline element:', headline); // See if it's found

    if (headline) {
      headline.style.left = '0';
    } else {
      console.error("Element not found!");
    }
  }, 500)
};


//FUNCTIONALITY FOR CARET AND SKILLS TITLE TYPING
document.addEventListener('DOMContentLoaded', () => {
  // Create an observer with a threshold so that it triggers when at least 10% of the element is visible
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const title = entry.target;
        observer.unobserve(title); // Stop observing once the effect is triggered
        const fullText = title.textContent;
        title.textContent = ''; // Clear current text
        let charIndex = 0;
        const typingSpeed = 150; // Adjust speed as needed

        const typeInterval = setInterval(() => {
          title.textContent += fullText.charAt(charIndex);
          charIndex++;
          if (charIndex === fullText.length) {
            clearInterval(typeInterval);
          }
        }, typingSpeed);
      }
    });
  }, { threshold: 0.1 });

  // Observe each skills title
  const titles = document.querySelectorAll('.skills__title');
  titles.forEach(title => observer.observe(title));
});