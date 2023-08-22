<style>
    #web {
        display: block;
    }

    #responsive {
        display: none;
    }

    @media (max-width: 576px) {
        .menuu {
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: reverse;
            flex-direction: column-reverse;
        }

        .left {
            margin-top: 15%;
        }

        #web {
            display: none;
        }

        #responsive {
            display: block;
        }

        .hallo {
            width: 35%;
        }

        .photo-right img {
            width: 250px;
            height: 250px;
        }

        hr.divider-center {
            height: 0.2rem;
            max-width: 8rem;
            margin: 1.5rem auto;
            background-color: #E8D0B3;
            opacity: 1;
        }

        hr.divider-center-light {
            background-color: #fff;
        }

        .social-media ul {
            display: flex;
            justify-content: center;
        }

        .social-media ul li {
            display: list-item;
        }

        .about-me {
            text-align: center;
        }

        .responsive_about_good_at ul {
            list-style-type: none;
            margin: auto;
            padding: 1em;
            overflow: hidden;
        }

        .ul_responsive {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .responsive_about_good_at li {
            padding-right: 10px;
            float: left;
        }

        .responsive_about_good_at li p {
            display: block;
            text-align: center;
            padding: 4px 16px;
            border: 2px solid #E8D0B3;
            font-size: 16px;
            border-radius: 5px;
        }

        .container__projects_right_responsive {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            min-width: 270px;
            width: 100%;
            min-height: 300px;
        }

        .container__projects_right_responsive h5 {
            color: #7EB5A6;
            margin-bottom: 2em;
        }

        .container__projects_right_responsive p {
            font-size: 16px;
        }
    }

    @media (min-width: 578px) {

        #web {
            display: block;
        }

        #responsive {
            display: none !important;
        }
    }

    @media (max-width: 992px) {

        .photo-right img {
            width: 250px;
            height: 250px;
        }
    }

    /*  @media (min-width: 992px) {

        .container-lg,
        .container-md,
        .container-sm,
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {

        .container-xl,
        .container-lg,
        .container-md,
        .container-sm,
        .container {
            max-width: 1140px;
        }
    }

    @media (min-width: 1400px) {

        .container-xxl,
        .container-xl,
        .container-lg,
        .container-md,
        .container-sm,
        .container {
            max-width: 1320px;
        }
    } */

</style>
