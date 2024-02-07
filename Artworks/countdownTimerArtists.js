document.addEventListener("DOMContentLoaded", function () {
  const exhibitionDate = new Date("2023-08-04T16:40:00").getTime();

  const countdown = setInterval(function () {
    const now = new Date().getTime();
    const distance = exhibitionDate - now;

    if (distance < 0) {
      clearInterval(countdown);
      document.getElementById("countdown").innerHTML =
        "The virtual exhibition is live!";
      document.getElementById("countdown").innerHTML +=
        '<br><button class="enter-button"><a href="virtualExhibitionArtists.php">Enter Exhibition</a</button>';
    } else {
      // Calculate remaining time
      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the countdown in the "countdown" element
      document.getElementById(
        "countdown"
      ).innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
    }
  }, 1000);
});
