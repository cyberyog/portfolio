<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: #061321;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        div{
            text-align: center;

        }
        .loader {
            width: calc(80px * 0.707);
            height: calc(80px * 0.707);
            background:#f0f0f0;
            clip-path: polygon(0 0, 50% 15%, 100% 0, 85% 50%, 100% 100%, 50% 85%, 0 100%, 15% 50%);
            -webkit-mask:
                radial-gradient(circle closest-side, #0000 92%, #000) top / 100% 33.4%,
                radial-gradient(circle closest-side, #0000 92%, #000) left / 33.4% 33.4%,
                radial-gradient(circle 5px, #0000 92%, #000) center / 33.3% 33.3%,
                radial-gradient(circle closest-side, #0000 92%, #000) right / 33.4% 33.4%,
                radial-gradient(circle closest-side, #0000 92%, #000) bottom / 100% 33.4%;
            -webkit-mask-repeat: no-repeat;
            animation: l4 1.5s infinite linear;
        }

        @keyframes l4 {
            100% { transform: rotate(1turn) }
        }
    </style>
</head>
<body>
    <div class="loader"></div>

    <script>
        // document.onreadystatechange = function () {
        //     if (document.readyState !== "complete") {
        //         document.body.style.display = "none";
        //         document.querySelector(".loader").style.display = "block";
        //     } else {
        //         document.querySelector(".loader").style.display = "none";
        //         document.body.style.display = "block";
        //     }
        //     
        // };
        setTimeout(function () {
                window.location.href = "Home?timestamp=" + new Date().getTime();
            }, 3000);
    </script>
</body>
</html>
