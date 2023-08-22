{{-- <style>
    .loading {
        display: flex;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transform: -webkit-translate(-50%, -50%);
        transform: -moz-translate(-50%, -50%);
        transform: -ms-translate(-50%, -50%);
        z-index: 99999;
    }

    .loading .dot {
        position: relative;
        width: 2em;
        height: 2em;
        margin: 0.8em;
        border-radius: 50%;
    }

    .loading .dot::before {
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        background: inherit;
        border-radius: inherit;
        animation: wave 2s ease-out infinite;
    }

    .loading .dot:nth-child(1) {
        background: #FFEBC9;
    }

    .loading .dot:nth-child(1)::before {
        animation-delay: 0.2s;
    }

    .loading .dot:nth-child(2) {
        background: #D79771;
    }

    .loading .dot:nth-child(2)::before {
        animation-delay: 0.4s;
    }

    .loading .dot:nth-child(3) {
        background: #B05B3B;
    }

    .loading .dot:nth-child(3)::before {
        animation-delay: 0.6s;
    }

    .loading .dot:nth-child(4) {
        background: #865439;
    }

    .loading .dot:nth-child(4)::before {
        animation-delay: 0.8s;
    }

    .loading .dot:nth-child(5) {
        background: #4A403A;
    }

    .loading .dot:nth-child(5)::before {
        animation-delay: 1s;
    }

    @keyframes wave {

        50%,
        75% {
            transform: scale(2.5);
        }

        80%,
        100% {
            opacity: 0;
        }
    }

    #myDiv {
        display: none;
    }

    .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
    }

    @-webkit-keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0px;
            opacity: 1
        }
    }

    @keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0;
            opacity: 1
        }
    }


    .top-layer {
        position: absolute;
        width: 100%;
        height: 100%;
        top: -100%;
        left: 0;
        bottom: auto;
        right: auto;
        background: #FFEBC9;
        transition: all 0.9s cubic-bezier(0.6, 0.05, 0.4, 1);
    }

    .top-layer.active {
        top: 100%;
    }

    .top-layer--2 {
        background: #D79771;
        transition-delay: 0.6s;
    }

    .top-layer--3 {
        background: #B05B3B;
        transition-delay: 0.4s;
    }

    .top-layer--4 {
        background: #865439;
        transition-delay: 0.2s;
    }

    .top-layer--5 {
        background: #4A403A;
        transition-delay: 0.1s;
    }

</style> --}}
