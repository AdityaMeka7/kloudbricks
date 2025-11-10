

    const text = "LOUDBRICKS";
    const container = document.getElementById("logoText");

    // Create span for each letter
    text.split("").forEach((letter, index) => {
        const span = document.createElement("span");
        span.textContent = letter;
        container.appendChild(span);
    });

    // Animate each letter
    const letters = container.querySelectorAll("span");
    letters.forEach((span, index) => {
        setTimeout(() => {
            span.classList.add("show");
        }, index * 200); // delay for each letter
    });

const nodes = document.querySelectorAll('[data-node]');
const groups = document.querySelectorAll('.pill-group');
const svg = document.getElementById('connector-svg');

function activateGroup(key) {
  groups.forEach(g => g.classList.remove('active'));
  document.querySelector(`[data-group="${key}"]`).classList.add('active');
  drawConnectors(key);
}

function drawConnectors(key) {
  svg.innerHTML = '';
  const flow = document.getElementById('flow');
  const flowRect = flow.getBoundingClientRect();

  const node = document.querySelector(`[data-node="${key}"]`);
  const nodeRect = node.getBoundingClientRect();
  const startX = nodeRect.left + nodeRect.width / 2 - flowRect.left;
  const startY = nodeRect.top + nodeRect.height / 2 - flowRect.top;

  const pills = document.querySelectorAll(`[data-group="${key}"] .pill`);
  pills.forEach((pill, i) => {
    const pillRect = pill.getBoundingClientRect();
    const endX = pillRect.left - flowRect.left;
    const endY = pillRect.top + pillRect.height / 2 - flowRect.top;

    const cp1x = startX + 30;
    const cp1y = startY +30;
    const cp2x = endX - 100;
    const cp2y = endY -10;

    const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    path.setAttribute('d', `M${startX},${startY} C${cp1x},${cp1y} ${cp2x},${cp2y} ${endX},${endY}`);
    path.setAttribute('class', 'path');
    path.setAttribute('stroke', '#6a8dff');
    svg.appendChild(path);
  });
  

  svg.setAttribute('width', flowRect.width);
  svg.setAttribute('height', flowRect.height);
  svg.setAttribute('viewBox', `0 0 ${flowRect.width} ${flowRect.height}`);
}

nodes.forEach(node => {
  node.addEventListener('mouseenter', () => {
    const key = node.dataset.node;
    activateGroup(key);
  });
});

window.addEventListener('load', () => {
  activateGroup('n1');
});
window.addEventListener('resize', () => {
  const active = document.querySelector('.pill-group.active');
  if (active) drawConnectors(active.dataset.group);
});


// Counters

document.addEventListener("DOMContentLoaded", () => {
 function counter(id, start, end, duration) {
  let obj = document.getElementById(id),
   current = start,
   range = end - start,
   increment = end > start ? 1 : -1,
   step = Math.abs(Math.floor(duration / range)),
   timer = setInterval(() => {
    current += increment;
    obj.textContent = current;
    if (current == end) {
     clearInterval(timer);
    }
   }, step);
 }
 counter("count1", 1, 140, 4000);
 counter("count2", 1, 200, 4000);
 counter("count3", 0, 200, 4000);
  counter("count4", 1500, 2019, 4000);
 counter("count5", 1, 100, 4000);
 counter("count6", 0, 97, 4000);
});


    // Testimonials
  
    const testimonialText = document.getElementById("testimonialText");
    const logos = document.querySelectorAll(".testimonial-item");
    let currentIndex = 0;
    let autoScrollInterval;

    function changeTestimonial(index) {
        testimonialText.style.opacity = 0;
        setTimeout(() => {
            testimonialText.textContent = logos[index].dataset.text;
            testimonialText.style.opacity = 1;
        }, 300);

        logos.forEach(logo => logo.classList.remove("active"));
        logos[index].classList.add("active");
        currentIndex = index;
    }

    function autoScroll() {
        currentIndex = (currentIndex + 1) % logos.length;
        changeTestimonial(currentIndex);
    }

    function resetAutoScroll() {
        clearInterval(autoScrollInterval);
        autoScrollInterval = setInterval(autoScroll, 4000);
    }

    // Logo click event
    logos.forEach((logo, index) => {
        logo.addEventListener("click", () => {
            changeTestimonial(index);
            resetAutoScroll();
        });
    });

    // Arrow click events
    document.getElementById("nextBtn").addEventListener("click", () => {
        autoScroll();
        resetAutoScroll();
    });

    document.getElementById("prevBtn").addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + logos.length) % logos.length;
        changeTestimonial(currentIndex);
        resetAutoScroll();
    });

    resetAutoScroll();


    // text typing

      var typing = new Typed(".text", {
        strings: [
          "With deep tech expertise and a passion for perfection, we trust ideas into outstanding digital.",
          "Top 10 App development company in India.",
          "Fueling innovation, accelerating growth — your partner in digital transformation and intelligent IT consulting."
        ],
        typeSpeed: 100,
        backSpeed: 20,
        loop: true,
      });
   
      function filterServices(category, e) {
        let cards = document.querySelectorAll(".service-card");
        let buttons = document.querySelectorAll(".filter-buttons button");

        // Update active button
        if (e) {
          buttons.forEach((btn) => btn.classList.remove("active"));
          e.target.classList.add("active");
        }

        // Show only the selected category
        cards.forEach((card) => {
          if (card.classList.contains(category)) {
            card.classList.remove("hide");
          } else {
            card.classList.add("hide");
          }
        });
      }

      // Run filter for Graphic Design on page load
      document.addEventListener("DOMContentLoaded", () => {
        filterServices("graphic");
      });
  
      
   