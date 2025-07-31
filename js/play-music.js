function playMusic() {
          const audio = document.getElementById("wedding-music");
          audio.play().then(() => {
            console.log("Music started");
          }).catch((e) => {
            console.log("Autoplay blocked: ", e);
          });
        }

        function openInvitation() {
          window.location.href = "invitation.html";
        }