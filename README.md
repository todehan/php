# PHP MYSQL Video Sitesi

- Bu admin paneli ile site içindeki temel kontrol edilebilir kısımların arayüz ile düzenlenebilmesi sağlanmıştır. 
- Kodlar açık kaynaktır ve isteyen projelerinde kullanabilir.



# Gereksinimler

- Projenin çalışması PHP Server, MySQL ve Apace2 olması gerekmektedir.
- Öneri olarak veritabanını daha rahat kontrol etmek için için phpMyAdmin kullanabilirsiniz.
- MySQL ile aşağıda belirtilen gibi tablo ve sütunlarını oluşturmalısınız.


# Tablo İsimleri

- ayar
- hakkimizda
- kullanici
- menu
- slider

# ayar Tablosu Sütunları(sırasıyla)

- ayar_id, ayar_logo, ayar_title, ayar_description, ayar_keywords, ayar_tel, ayar_gsm, ayar_faks, ayar_mail, ayar_sehir, ayar_adres, ayar_eyalet, ayar_maps, ayar_analystic, ayar_zopim, ayar_facebook, ayar_instagram, ayar_youtube, ayar_smtphost, ayar_smtppassword, ayar_smtpport, ayar_bakim

# hakkimizda Tablosu Sütunları(sırasıyla)

- hakkimizda_id, hakkimizda_baslik, hakkimizda_icerik, hakkimizda_amac

# kullanici Tablosu Sütunları(sırasıyla)

- kullanici_id, kullanici_zaman, kullanici_zaman, kullanici_resim, kullanici_ad, kullanici_adsoyad, kullanici_mail, kullanici_tel, kullanici_password, kullanici_unvan, kullanici_yetki, kullanici_durum, kullanici_il, kullanici_ilce, kullanici_adres, kullanici_anahtar

# menu Tablosu Sütunları(sırasıyla)

- menu_id, menu_ust, menu_ad, menu_detay, menu_url, menu_sira, menu_durum, menu_seourl

# slider Tablosu Sütunları(sırasıyla)

- slider_id, slider_ad, slider_resimyol, slider_sira, slider_link, slider_durum


# NOTLAR   

- id sütunlarını primary yapmayı unutmayın. durum sütunlarını varsayılan 1 olarak ayarlamanız yararınıza olacaktır. 
- hakkimizda_id ve ayar_id değerlerini 11 olarak girin.
- kullanici_id, menu_id ve slider_id alanlarında AUTO_INCREMENT özelliğini etkinleştirmeniz gerekmektedir.




