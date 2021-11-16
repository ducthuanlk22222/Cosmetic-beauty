<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
            :root{
        --blue: rgb(17, 132, 226);
            }

    *{
        font-family: 'Poppins',sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .btn{
        position: relative;
        float: right;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 3rem;
        width: 8rem;
        background-color: var(--blue);
        color: #fff;
        margin-top: 8px;
    }

    .btn:hover{
        cursor: pointer;
        width: 10rem;
        letter-spacing: 2px;
        transition: .2s linear;
    }


    section{
        padding: 5rem 0;
    }

    .contact .heading{
        text-align: center;
        font-size: 2.5rem;
        text-transform: uppercase;
    }

    .contact .heading:hover{
    }

    .contact .contact-container{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contact .contact-container .form-control{
        border: 1px solid #000;
        padding: 1rem;
        width: 32rem;
        margin-bottom: 1rem;
        border-radius: 8px;;
        font-weight: 800;
    }
    .contact .contact-container textarea{
        font-style: italic;

        border: 1px solid #000;
        padding: 1rem;
        width: 32rem;
        height: 18rem;
        border-radius: 8px;;
    }

    .contact .contact-btn {
        background-color: var(--main-color);
        height: 4rem;
        border-radius: 7px;
        margin-bottom: 1rem;
        text-align: center;
        line-height: 4rem;
        color: #fff;
        text-transform: uppercase;
    }
</style>
<section class="contact" id="contact">
        <h1 class="heading">Hoàn Tất Đơn Hàng</h1>
        <div class="contact-container">
            <div class="form">
                <div class="contact-btn">
                    <h1>Contact Now</h1>
                </div>
                <form action="">
                    <div class="form-contact">
                        <div class="name">
                            <input type="text" required placeholder="Họ Tên" name="" class="form-control">
                        </div>
                        <div class="name">
                            <input type="number" required placeholder="Số Điện Thoại" name="" class="form-control">
                        </div>
                        <div class="address">
                            <input type="text" required  placeholder="Địa chỉ" name="" class="form-control">
                        </div>
                        <div class="message">
                           <textarea name="" placeholder="Ghi chú" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button class="btn" type="submit">SEND</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>