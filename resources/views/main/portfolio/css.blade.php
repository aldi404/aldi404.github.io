<style>
    hr.divider2 {
        height: 0.2rem;
        max-width: 15rem;
        margin: 1.5rem auto;
        background-color: #E8D0B3;
        opacity: 1;
    }

    #portfolio_image {
        display: grid;
        height: calc(100vh - 10px);
        grid-template: repeat(6, 1fr)/repeat(6, 1fr);
        grid-gap: 0.5em;
    }

    @media (max-width: 800px) {
        #portfolio_image {
            display: flex;
            align-items: flex-start;
            flex-wrap: wrap;
            justify-content: center;
        }

        #portfolio_image>div {
            width: 48%;
            margin: 1%;
        }
    }

    @media (max-width: 800px) and (max-width: 350px) {
        #portfolio_image>div {
            width: 98%;
        }
    }

    #portfolio_image>div:nth-child(6n+1) {
        grid-column: span 2;
        grid-row: span 2;
    }

    #portfolio_image>div:nth-child(2) {
        grid-column: span 3;
        grid-row: span 3;
    }

    #portfolio_image>div:nth-child(4) {
        grid-column: span 1;
        grid-row: span 2;
    }

    #portfolio_image>div>a {
        opacity: 0;
        position: absolute;
        color: #fff;
        background-color: rgba(92, 77, 66, 0.4);
        font: bold 1em "Helvetica";
        /* text-shadow: 0 -1px 5px #fff, -1px 0px 5px #fff, 0 1px 5px #fff, 1px 0px 5px #fff; */
        padding: 2rem;
        /* mix-blend-mode: difference; */
        width: 100%;
        height: 100%;
        transition: all ease 1s;
    }

    #portfolio_image>div>img {
        width: 100%;
        min-height: 100%;
        transition: all ease 1s;
    }

    #portfolio_image>div:hover img {
        filter: blur(4px);
    }

    #portfolio_image>div:hover a {
        opacity: 1;
    }

    #portfolio_image>div {
        overflow: hidden;
        position: relative;
        box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2), 0 3px 20px 0 rgba(0, 0, 0, 0.19);
    }

    #portfolio_image div,
    #portfolio_image a {
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
    }

    [id^=lightbox-] {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        opacity: 0;
        transition: opacity 450ms ease-in-out;
        align-items: center;
        justify-content: center;
        pointer-events: none;
    }

    [id^=lightbox-]:target {
        opacity: 1;
        pointer-events: inherit;
    }

    [id^=lightbox-]:target img {
        filter: blur(0);
    }

    [id^=lightbox-] .content {
        max-width: 90%;
        position: relative;
        color: #fff;
    }

    [id^=lightbox-] .content:hover>a.close {
        opacity: 1;
        transform: scale(1, 1);
    }

    [id^=lightbox-] .content:hover>.title {
        opacity: 1;
        transform: translateY(-3px);
    }

    [id^=lightbox-] .content:hover>.title::after {
        opacity: 1;
    }

    [id^=lightbox-] .content>* {
        transition: all 450ms ease-in-out;
    }

    [id^=lightbox-] .title {
        display: block;
        margin: 0;
        padding: 1em;
        position: absolute;
        bottom: 0;
        width: 100%;
        transform: translateY(50%);
        font-size: 14px;
        opacity: 0;
    }

    [id^=lightbox-] .title::after {
        content: " ";
        background-color: rgba(0, 0, 0, 0.4);
        bottom: 0;
        left: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        transition: all 350ms ease-in-out 250ms;
        opacity: 0;
        transform-origin: bottom;
        mix-blend-mode: soft-light;
    }

    [id^=lightbox-] img {
        max-height: 60vh;
        max-width: 100%;
        margin: 0;
        padding: 0;
        filter: blur(50px);
    }

    [id^=lightbox-] a.close {
        width: 2em;
        height: 2em;
        position: absolute;
        right: 0;
        top: 0;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        transform: scale(0, 0);
        opacity: 0;
        transform-origin: right top;
        text-decoration: none;
        color: #fff;
    }

    [id^=lightbox-] a.close::after {
        content: "X";
    }

</style>
