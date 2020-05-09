<div class="pfl-wrapper">
    <div class="row">
        <div class="col-md-5">
            <h5>İletişim Bilgileri</h5>
            <hr>

            <ul class="list-group">
                <li class="list-group-item"><i class="fa fa-phone"></i> +90 538 240 9120</li>
                <li class="list-group-item"><i class="fa fa-map-marked"></i> İstanbul, Türkiye</li>
                <li class="list-group-item"><i class="fa fa-envelope"></i> feyyazereren@outlook.com</li>
            </ul>
        </div>
        <div class="col-sm-12 d-md-none">
            <p>&nbsp;</p>
        </div>
        <div class="col-md-6 offset-md-1">
            <h5>İletişim Formu</h5>
            <hr>
            <form id="iletisimform" action="/form-gonder" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Ad Soyad</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">E-posta</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="subject">Konu</label>
                    <select name="subject" id="" class="form-control">
                        <option value="">-Seçiniz-</option>
                        <option value="iletisim">İletişim</option>
                        <option value="oneri">Öneri/Talep</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="priority">Öncelik</label>
                    <br>
                    <label class="badge badge-dark">Yüksek <input type="radio" class="form-control" name="priority" value="yuksek"></label>
                    <label class="badge badge-secondary">Orta <input type="radio" class="form-control" name="priority" value="orta"></label>
                    <label class="badge badge-info">Düşük <input type="radio" class="form-control" name="priority" value="dusuk"></label>
                </div>
                <div class="form-group">
                    <label for="message">Mesaj</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="message">Şartları kabul ediyorum</label>
                    <input type="checkbox" name="sartlar" required>
                </div>
                <hr>
                <div class="text-right">
                    <button class="btn btn-info" type="reset">Sıfırla <i class="fa fa-trash"></i></button>
                    <button class="btn btn-dark" type="button" id="sendButton">Gönder <i class="fa fa-chevron-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="/assets/js/iletisim.js"></script>