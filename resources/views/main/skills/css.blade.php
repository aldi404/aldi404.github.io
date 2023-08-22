<style>
    .container__progressbars {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
        min-width: 270px;
        width: 100%;
        min-height: 300px;
    }

    .progressbar {
        border: none;
        position: relative;
        width: 90px;
        height: 90px;
        margin: 1em;
        transform: rotate(-90deg);
    }

    .progressbar__svg {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .progressbar__svg-circle {
        width: 100%;
        height: 100%;
        fill: none;
        stroke-width: 10;
        stroke-dasharray: 440;
        stroke-dashoffset: 440;
        stroke: #fff;
        stroke-linecap: round;
        transform: translate(5px, 5px);
    }

    .shadow-html {
        filter: drop-shadow(0 0 2px #7EB5A6);
    }

    .shadow-css {
        filter: drop-shadow(0 0 2px #7EB5A6);
    }

    .shadow-php {
        filter: drop-shadow(0 0 2px #7EB5A6);
    }

    .shadow-js {
        filter: drop-shadow(0 0 2px #7EB5A6);
    }

    .shadow-laravel {
        filter: drop-shadow(0 0 2px #7EB5A6);
    }

    .shadow-react {
        filter: drop-shadow(0 0 2px #7EB5A6);
    }

    .shadow-flutter {
        filter: drop-shadow(0 0 2px #7EB5A6);
    }

    .circle-html {
        animation: anim_circle-html 1s ease-in-out forwards;
    }

    .circle-css {
        animation: anim_circle-css 1s ease-in-out forwards;
    }

    .circle-php {
        animation: anim_circle-php 1s ease-in-out forwards;
    }

    .circle-js {
        animation: anim_circle-js 1s ease-in-out forwards;
    }

    .circle-laravel {
        animation: anim_circle-laravel 1s ease-in-out forwards;
    }

    .circle-flutter {
        animation: anim_circle-flutter 1s ease-in-out forwards;
    }

    .circle-react {
        animation: anim_circle-react 1s ease-in-out forwards;
    }

    .progressbar__text {
        position: absolute;
        top: 50%;
        left: 50%;
        padding: 0.25em 0.5em;
        color: #fff;
        font-family: Arial, Helvetica, sans-serif;
        border-radius: 0.25em;
        transform: translate(-50%, -50%) rotate(90deg);
    }

    .progressbar__bottom_text {
        transform: translate(-50%, -50%) rotate(90deg);
        position: absolute;
        top: 50%;
        padding: 0.25em 0.5em;
        margin-left: -15px
    }

    @keyframes anim_circle-php {
        to {
            stroke-dashoffset: 250;
        }
    }

    @keyframes anim_circle-html {
        to {
            stroke-dashoffset: 230;
        }
    }

    @keyframes anim_circle-css {
        to {
            stroke-dashoffset: 230;
        }
    }

    @keyframes anim_circle-js {
        to {
            stroke-dashoffset: 260;
        }
    }

    @keyframes anim_circle-laravel {
        to {
            stroke-dashoffset: 240;
        }
    }

    @keyframes anim_circle-flutter {
        to {
            stroke-dashoffset: 230;
        }
    }

    @keyframes anim_circle-react {
        to {
            stroke-dashoffset: 260;
        }
    }



    .professional_skills-progress {
        width: 100%;
        max-width: 350px;
        height: 6px;
        background: #e1e4e8;
        border-radius: 3px;
        overflow: hidden;
    }

    .professional_skills-progress .professional_skills-progressbar {
        display: block;
        height: 100%;
        background: linear-gradient(90deg, #5c4d42, #7EB5A6 17%, #E8D0B3 34%, #7EB5A6 51%, #E8D0B3 68%, #E8D0B3 85%, #7EB5A6);
        background-size: 300% 100%;
        -webkit-animation: progress-animation 2s linear infinite;
        animation: progress-animation 2s linear infinite;
    }

    @-webkit-keyframes progress-animation {
        0% {
            background-position: 100%;
        }

        100% {
            background-position: 0;
        }
    }

    @keyframes progress-animation {
        0% {
            background-position: 100%;
        }

        100% {
            background-position: 0;
        }
    }

</style>
