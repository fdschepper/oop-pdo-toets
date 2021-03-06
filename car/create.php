<head><style>html{font-family:"Roboto",sans-serif}h1,h2,h3,h4,h5,h6{font-family:"Source Sans Pro",sans-serif}header{padding:0 .5rem;border-bottom:1px solid #000}header nav ul{list-style:none}header nav ul li a{display:flex;padding:.25rem 1rem;color:#000;text-decoration:none}header div.mobile-hamburger{display:none}@media only screen and (max-width: 768px){body.is-active{overflow:hidden}header{transition:left .8s cubic-bezier(0, 0, 0.02, 1.03)}header.is-active{position:absolute;height:100vh;width:100vw;background:rgba(255,255,255,.5);backdrop-filter:blur(2px)}header.is-active h3{display:none}header.is-active nav ul{left:0}header nav ul{flex-direction:column;justify-content:center;align-items:center;flex-wrap:wrap;position:absolute;height:100vh;width:100vw;margin:0;padding:0;top:0;left:-101vw}header nav ul li{height:1rem;margin:2.5rem 0 2.5rem 0}header div.mobile-hamburger{display:block}}#footer{min-height:4em;background-color:teal;color:#fff;text-align:center;position:fixed;width:100vw;bottom:0;border-radius:25px 0px 0px 0px}.border-25{border-radius:25px 25px 25px 25px}.bg-grey{background-color:#959aa3}.h-25{height:25%}.h-50{height:50%}.h-75{height:75%}.h-100{height:100%}.largepost{width:83%;height:40%;font-size:200%;overflow:hidden}.largepost span{margin-top:20px}.largepost .col-6 img{height:80%;width:auto}.smallpost{max-width:35%;height:20rem;font-size:200%;overflow:scroll}.smallpost img{height:80%;width:auto}.floatl{float:left}.displayblock{display:block}.smalltxt{font-size:.6em}.m0tb{margin-top:0;margin-bottom:0}.archive .largepost{height:100vh}.archive .largepost img{height:100%}.btn{width:auto;background-color:red;color:#fff;border-radius:45px}.block{width:768px;height:362px;background-color:#959aa3;overflow:visible;border-radius:45px;text-align:center}.secondblock{width:768px;height:505px;background-color:#959aa3;overflow:visible;border-radius:45px;text-align:center}.thirdblock{width:568px;height:212px;background-color:#959aa3;overflow:visible;border-radius:45px;text-align:center}.smalblock{width:768px;height:150px;background-color:#959aa3;overflow:visible;border-radius:45px;text-align:center;font-size:200%;display:flex;justify-content:center;align-items:center}.normallink{color:#000;text-decoration:none}.post-content{height:90px}td,th{border:1px solid #ddd;text-align:left;padding:8px}tr:nth-child(even){background-color:#698cf6}tr:nth-child(odd){background-color:#dde8fe}/*# sourceMappingURL=style.css.map */</style> </head>
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="block">
            <h3>Create row</h3>
            <form action="./createscript.php" method="post">

                <div class="form-group">
                    <label for="Merk">Merk</label>
                    <input name="Merk" type="Merk" class="form-control" id="Merk" aria-describedby="Merk" required>
                    <small id="Merk" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="Model">Model</label>
                    <input name="Model" type="Model" class="form-control" id="Model" aria-describedby="Model" required>
                    <small id="Model" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="Topsnelheid">Topsnelheid</label>
                    <input name="Topsnelheid" type="Topsnelheid" class="form-control" id="Topsnelheid" aria-describedby="Topsnelheid">
                    <small id="Topsnelheid" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="Prijs">Prijs</label>
                    <input name="Prijs" type="number" class="form-control" id="Prijs" aria-describedby="Prijs">
                    <small id="Prijs" class="form-text text-muted"></small>
                </div>

                <button type="submit">Verstuur</button>

            </form>
            </div>
        </div>
    </div>
</div>