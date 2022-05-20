<x-egitim_layout :navbars="$navbars">
  Detay
  {{-- {{$egitim->baslik}} --}}
  <div class="d-flex flex-column flex-md-row gap-3 p-md-0 w-full" id="main_ic">
    <div class="" id="content">
      <div class="header">
        <div class="d-flex flex-row gap-3">
          <img src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTgwOTN8MHwxfHNlYXJjaHw0fHxjbGFzc3xlbnwwfHx8fDE2NTE4NjgyNDc&ixlib=rb-1.2.1&q=80&w=1080" alt="" class="shadow-sm">                
          <div class="d-flex flex-column gap-2 justify-content-between">
            <h2 class="baslik">{{$egitim->baslik}}</h2>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="#"><i class="fas fa-heart"></i> 3 beğeni</a>
              </li>              
              <li class="list-group-item">
                <a href="#"><i class="fas fa-user-graduate"></i> 23 kişi kayıtlı</a>
              </li>           
              <li class="list-group-item">
                <a href="#"><i class="fas fa-comments"></i> 123 yorum</a>
              </li>              
              <li class="list-group-item">
                <a href="#"><i class="fas fa-paperclip"></i> 8 ek dosya</a>
              </li>           
            </ul>
          </div>
        </div>              
      </div><!-- /header -->
      <nav class="nav d-flex flex-row flex-wrap gap-2">
        <a class="nav-link" href="#aciklama">Açıklama</a>
        <a class="nav-link" href="#icerik">içerik</a>
        <a class="nav-link" href="#kitle">kitle</a>
        <a class="nav-link" href="#kazanim">kazanımlar</a>
        <a class="nav-link" href="#yorum">yorumlar</a>
        <a class="nav-link" href="#dokuman">dökümanlar</a>
        <a class="nav-link" href="#sss">s.s.s</a>
      </nav><!-- /nav -->
      <div class="w-full" id="aciklama">
        <h3 class="baslik">açıklama</h3>
        <p>
          {{$egitim->icerik}}
        </p>
      </div><!-- /aciklama -->
      <div class="w-full" id="icerik">
        <h3 class="baslik">içerik</h3>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Accordion Item #1                      
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Accordion Item #3
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
          </div>
        </div>
      </div><!-- /icerik -->
      <div class="w-full" id="kitle">
        <h3 class="baslik">kitle</h3>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id reprehenderit aperiam neque eum ex doloremque molestiae provident soluta ea architecto.
        </p>
        <ul class="list-group list-group-numbered">
          <li class="list-group-item">Active item</li>
          <li class="list-group-item">Active item</li>
          <li class="list-group-item">Active item</li>
          <li class="list-group-item">Active item</li>
        </ul>
      </div><!-- /kitle -->
      <div class="w-full" id="kazanim">
        <h3 class="baslik">kazanımlar</h3>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id reprehenderit aperiam neque eum ex doloremque molestiae provident soluta ea architecto.
        </p>
        <ul class="list-group">
          <li class="list-group-item">Active item</li>
          <li class="list-group-item">Active item</li>
          <li class="list-group-item">Active item</li>
          <li class="list-group-item">Active item</li>
        </ul>
      </div><!-- /kazanim -->
      <div class="w-full" id="yorum">
        <h3 class="baslik">yorumlar</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati modi illo, cupiditate fugiat deserunt debitis esse quae exercitationem assumenda, earum praesentium aliquid minima inventore. Ipsa qui saepe maiores ad ipsam.</p>
        <div class="card-group d-flex flex-column gap-2 w-full">
          <div class="card w-full">
            <div class="card-title">
              <i class="fas fa-quote-left"></i>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, maxime?
              <i class="fas fa-quote-right"></i>
            </div>
            <div class="card-body">
              <strong>Ahmet Ahmetoğlu</strong>
              <p>32.02.2032 tarihinde yazılmıştır.</p>
            </div>
          </div>
          <div class="card w-full">
            <div class="card-title">
              <i class="fas fa-quote-left"></i>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, maxime?
              <i class="fas fa-quote-right"></i>
            </div>
            <div class="card-body">
              <strong>Ahmet Ahmetoğlu</strong>
              <p>32.02.2032 tarihinde yazılmıştır.</p>
            </div>
          </div>
          <div class="card w-full">
            <div class="card-title">
              <i class="fas fa-quote-left"></i>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, maxime?
              <i class="fas fa-quote-right"></i>
            </div>
            <div class="card-body">
              <strong>Ahmet Ahmetoğlu</strong>
              <p>32.02.2032 tarihinde yazılmıştır.</p>
            </div>
          </div>
        </div><!-- /card-group -->
      </div><!-- /yorum -->
      <div class="w-full" id="dokuman">
        <h3 class="baslik">dökümanlar</h3>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id reprehenderit aperiam neque eum ex doloremque molestiae provident soluta ea architecto.
        </p>
        <ul class="list-group">
          <li class="list-group-item">Active item</li>
          <li class="list-group-item">Active item</li>
          <li class="list-group-item">Active item</li>
          <li class="list-group-item">Active item</li>
        </ul>
      </div><!-- /dokuman -->
      <div class="w-full" id="sss">
        <h3 class="baslik">S.S.S</h3>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <span>Soru:</span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, architecto?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                <span>Soru:</span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, architecto?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                <span>Soru:</span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, architecto?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
          </div>
        </div>
      </div><!-- /sss -->
    </div><!-- /content -->
    <div class="" id="aside">
      <div class="w-full d-flex flex-column gap-2 btn-group is-abone-degil">
        <button type="button" name="" id="" class="btn">eğitime katıl</button>              
        <button type="button" name="" id="" class="btn btn1"><i class="fas fa-bookmark"></i>Daha sonra izleye ekle</button>              
        <button type="button" name="" id="" class="btn btn2"><i class="fas fa-heart"></i>Beğenilere ekle</button>              
      </div><!-- /abone-değil -->

      <div class="w-full d-flex flex-column btn-group is-abone">
        <button type="button" name="" id="" class="btn mb-2">eğitime devam et</button>              
        <p>Katılım durumu: <span>Devam ediyor</span></p>
        <p>Başarı durumu: <span>Başarısız</span></p>
        <p>Başarı puanı: <span>4/100</span></p>
        <p>Harcanan süre: <span>2:40:00</span></p>
        <p>Tamamlanma durumu: <span>%40</span></p>
      </div><!-- /abone -->

      <div class="w-full d-flex flex-column gap-2 egitmen">
        <h4 class="baslik">Eğitmen</h4>
        <a href="#" class="d-flex flex-row align-items-center gap-3">
          <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTgwOTN8MHwxfHNlYXJjaHwyMHx8cG9ydHJhaXR8ZW58MHx8fHwxNjUxNzczNzkw&ixlib=rb-1.2.1&q=80&w=1080" alt="">
          <div>
            <h3>Oğuz Korkmaz</h3>
            <p>Bilgisayar Mühendisi</p>
          </div>
        </a>
      </div><!-- /egitmen -->

      <div class="w-full d-flex flex-column gap-2 egitmenler">
        <h4 class="baslik">Eğitmenler</h4>
        <div class="d-flex flex-column gap-2">
          <a href="#" class="d-flex flex-row align-items-center gap-2">
            <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTgwOTN8MHwxfHNlYXJjaHwyMHx8cG9ydHJhaXR8ZW58MHx8fHwxNjUxNzczNzkw&ixlib=rb-1.2.1&q=80&w=1080" alt="">
            <div>
              <h3>Oğuz Korkmaz</h3>
              <p>Bilgisayar Mühendisi</p>
            </div>
          </a>
          <a href="#" class="d-flex flex-row align-items-center gap-2">
            <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTgwOTN8MHwxfHNlYXJjaHwyMHx8cG9ydHJhaXR8ZW58MHx8fHwxNjUxNzczNzkw&ixlib=rb-1.2.1&q=80&w=1080" alt="">
            <div>
              <h3>Oğuz Korkmaz</h3>
              <p>Bilgisayar Mühendisi</p>
            </div>
          </a>
        </div>
      </div><!-- /egitmenler -->
    </div><!-- /aside -->
  </div><!-- /main_ic -->
</x-egitim_layout>