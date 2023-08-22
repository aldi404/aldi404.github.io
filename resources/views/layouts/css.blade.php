<style>
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
</style>
