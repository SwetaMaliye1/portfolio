

// Function to check if the device is a mobile device
function isMobileDevice() {
    return window.innerWidth <= 768; // Adjust the width as per your mobile device breakpoints
}

document.addEventListener("DOMContentLoaded", function () {
    // Ensure isMobileDevice() function is defined to accurately detect mobile devices
    if (!isMobileDevice()) {
        // Get the element you want to animate
        let groupImage = document.querySelector('.hero-section .profile-photo');

        // Ensure groupImage is not null (element exists)
        if (groupImage) {
            // Create a GSAP animation using the groupImage variable
            gsap.to(groupImage, { // Corrected to use the groupImage variable
                y: "-200px", // Moves the image 200px upwards
                scrollTrigger: {
                    trigger: '.hero-section', // Updated to '.hero-section' assuming that's your intended trigger element
                    start: "top top", // Starts the animation at the top of the hero section
                    end: "bottom top", // Ends the animation at the bottom of the hero section
                    scrub: true // Smooth scrolling effect
                }
            });
        }
    }
});

// Register GSAP ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);

window.addEventListener('load', () => {
    const titles = document.querySelectorAll('.title-gsap');

    titles.forEach((title, index) => {
        gsap.fromTo(title, {
            opacity: 0,
            scale: 1.1,
            y: '8vh'
        }, {
            opacity: 1,
            scale: 1,
            y: 0,
            ease: "power3.out",
            scrollTrigger: {
                trigger: title,
                start: 'top 80%',
                end: 'top 20%',
                scrub: true
            }
        });
    });
});










// // Function to update Uttarakhand time
// function updateUttarakhandTime() {
//     const options = {
//         hour: "numeric",
//         minute: "numeric",
//         hour12: true,
//         timeZone: "Asia/Kolkata", // Updated timeZone for Uttarakhand
//     };
//     const timeString = new Date().toLocaleString("en-US", options);
//     const timeElement = document.getElementById("time");

//     // console.log(timeString);
//     // document.getElementById("time").textContent = timeString;
//     // console.log(timeElement); // Check if timeElement is found
//     if (timeElement) {
//         timeElement.textContent = timeString;
//     } else {
//         console.error("Time element not found");
//     }
//   }
  
//   // Function to get weather information for Uttarakhand
//   function getUttarakhandWeather() {
//     const cityName = "Dehradun"; // City in Uttarakhand
//     const apiKey = "882488cfa20348d90d591679444d4389";
//     const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${cityName}&appid=${apiKey}`;
//     // api.openweathermap.org/data/2.5/weather?q=Amravati&APPID=882488cfa20348d90d591679444d4389
//     fetch(apiUrl)
//         .then((response) => response.json())
//         .then((data) => {
//             const temperature = (data.main.temp - 273.15).toFixed(1);
//             document.getElementById("temperature").textContent = `${temperature}\xb0C`;
//             document.getElementById("weather-icon").src = getWeatherIcon(data.weather[0].main);
//         })
//         .catch((error) => {
//             console.error("Error fetching weather data:", error);
//             document.getElementById("temperature").textContent = "Temperature data unavailable";
//         });
//   }
  
//   // Function to get weather icon based on weather condition
//   function getWeatherIcon(weatherCondition) {
//     switch (weatherCondition) {
//         case "Clear":
//         default:
//             return "img/clear.svg";
//         case "Clouds":
//             return "img/clouds.svg";
//         case "Rain":
//             return "img/rain.svg";
//         case "Snow":
//             return "img/snow.svg";
//     }
//   }
  
//   // Invoke the functions for Uttarakhand
//   updateUttarakhandTime();
//   getUttarakhandWeather();
  
//   // Set intervals for updating time and weather
//   setInterval(updateUttarakhandTime, 1000);
//   setInterval(getUttarakhandWeather, 600000);
  


document.addEventListener("DOMContentLoaded", function() {
    // Function to update time
    function updateUttarakhandTime() {
        const options = {
            hour: "numeric",
            minute: "numeric",
            hour12: true,
            timeZone: "Asia/Kolkata", // Updated timeZone for Uttarakhand
        };
        const timeString = new Date().toLocaleString("en-US", options);
        const timeElement = document.getElementById("time");
        if (timeElement) {
            timeElement.textContent = timeString;
        } else {
            console.error("Time element not found");
        }
    }

    // Function to get weather icon based on weather condition
    function getWeatherIcon(weatherCondition) {
        switch (weatherCondition) {
            case "Clear":
            default:
                return "image/clouds.svg";
            case "Clouds":
                return "image/clouds.svg";
            case "Rain":
                return "image/rain.svg";
            // case "Snow":
            //     return "img/snow.svg";
        }
    }

    // Function to update weather information
    function updateUttarakhandWeather() {
        const cityName = "Amravati"; // City in Uttarakhand
        const apiKey = "882488cfa20348d90d591679444d4389";
        const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${cityName}&appid=${apiKey}`;
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const temperature = (data.main.temp - 273.15).toFixed(1);
                const temperatureElement = document.getElementById("temperature");
                if (temperatureElement) {
                    temperatureElement.textContent = `${temperature}\xb0C`;
                }
                const weatherIconElement = document.getElementById("weather-icon");
                if (weatherIconElement) {
                    weatherIconElement.src = getWeatherIcon(data.weather[0].main);
                }
            })
            .catch(error => {
                console.error("Error fetching weather data:", error);
                const temperatureElement = document.getElementById("temperature");
                if (temperatureElement.textContent !== "Temperature data unavailable") {
                    temperatureElement.textContent = "Temperature data unavailable";
                }
            });
    }

    // Initial call to update time and weather
    updateUttarakhandTime();
    updateUttarakhandWeather();

    // Set intervals for updating time and weather
    setInterval(updateUttarakhandTime, 1000);
    setInterval(updateUttarakhandWeather, 600000); // 10 minutes
});

  
//button css


// document.getElementById('copyButton').addEventListener('click', function() {
//     // Get the email address
//     var email = 'swetamaiye62@gmail.com';
  
//     // Create a temporary input element
//     var tempInput = document.createElement('input');
//     tempInput.value = email;
  
//     // Append the input element to the document
//     document.body.appendChild(tempInput);
  
//     // Select and copy the email address
//     tempInput.select();
//     document.execCommand('copy');
  
//     // Remove the temporary input element
//     document.body.removeChild(tempInput);
  
//     // Change the button text to "Copied"
//     var btnCopied = document.querySelector('.btn_copied');
//     btnCopied.textContent = 'Email Copied';
  
//     // Optional: Reset the button text after a certain delay (e.g., 2 seconds)
//     setTimeout(function() {
//       btnCopied.textContent = 'Copy Email';
//     }, 500);
//   });
//   <button id="copyButton">Copy Email</button>
// <button class="btn_copied"></button>


document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('copyButton').addEventListener('click', function() {
      var email = 'swetamaiye62@gmail.com';
      var tempInput = document.createElement('input');
      tempInput.value = email;
      document.body.appendChild(tempInput);
      tempInput.select();
      document.execCommand('copy');
      document.body.removeChild(tempInput);

      var btnCopied = document.querySelector('.btn_copied');
      btnCopied.textContent = 'Email Copied';

      setTimeout(function() {
        btnCopied.textContent = "Let's work together";
      }, 500);
    });
  });






  function initMarqueeAnimation() {
    const animationConfig = {
        duration: 5,
        x: "-125%",
        repeat: -1,
        ease: "linear"
    };

    const marqueeContainer = document.querySelector(".js-btn-loop");
    gsap.to(marqueeContainer, {
        ...animationConfig
    });
}

document.addEventListener("DOMContentLoaded", function () {
    // Other code ...

    // Call the function to initialize marquee animation
    initMarqueeAnimation();
});





document.addEventListener("DOMContentLoaded", function () {
    const hoverButton = document.getElementById("hoverButton");
    const futureVideo = document.getElementById("futureVideo");
  
    hoverButton.addEventListener("mouseover", function () {
      gsap.to("#futureVideo", {
        opacity: 1,
        duration: 1.5,
        ease: Power4
      });
      futureVideo.play();
    });
  
    hoverButton.addEventListener("mouseleave", function () {
      gsap.to("#futureVideo", {
        opacity: 0,
        duration: 1.5,
        ease: Power4
      });
      futureVideo.pause();
      futureVideo.currentTime = 0; // Reset video to the beginning
    });
  });



  