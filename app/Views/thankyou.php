<style>
    .thankuMsgWrap {
        background-image: url(/public/image/bg-enterprise-mobility.jpg);
        margin: -8px;
        background-size: cover;
        height: 100vh;
    }

    .thankuMsgContent {
        display: flex;
        align-items: center;
        height: 100%;
        justify-content: center;
        font-size: 21px;
        font-family: "Poppins", sans-serif;
        max-width: 1220px;
        margin: 0 auto;
    }

    .thankuMsgWrap .leftContent {
        width: 40%;
        margin-right: 80px;
    }

    .thankuMsgWrap .leftContent img {
        width: 100%;
    }

    .thankuMsgWrap .rightContent {
        width: 50%;
    }

    .thankuMsgWrap .thankuMsg h1 {
        font-size: 85px;
        font-weight: bold;
        margin-bottom: 29px;
        margin-top: 0;
        text-transform: capitalize;
    }

    .thankuMsgWrap .thankuMsg p {
        margin-top: 0;
        margin-bottom: 42px;
        font-size: 24px;
    }

    a.btn.btn-primary {
        background: #172800;
        text-decoration: none;
        color: #fff;
        padding: 15px 26px;
        border-radius: 10px;
        display: inline-block;
    }
</style>

<div class="thankuMsgWrap">
    <div class="thankuMsgContent">
        <div class="leftContent">
            <img src="<?= base_url('/image/campaign/faces-positive-flat.svg') ?>">
        </div>
        <div class="rightContent">
            <div class="thankuMsg">
                <h1>Thank You!</h1>
                <p>
                    Thank you for visiting our website. <br />You will receive an email message shortly.
                </p>
                <a class="btn btn-primary" href="/">Back to Home</a>
            </div>
        </div>
    </div>
</div>