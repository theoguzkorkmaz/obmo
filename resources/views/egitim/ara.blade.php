<x-egitim_layout :navbars="$navbars">
  <div class="container p-md-0" id="ara">
    <div class="ara-brand">
      <span>O B M O</span>
      <span><i class="fas fa-search"></i> Ara</span>      
    </div><!-- /ara-brand -->
    <form action="/egitim/ara">
      <div class="input-group">       
        <input type="text" class="form-control" name="ara" placeholder="Aramak istediğiniz eğitimi yazınız">
        <button class="btn" type="submit" id="button-addon1"><i class="fas fa-search"></i></button>
      </div>
    </form>
  </div><!-- /ara --> 
    

  <x-egitim_ara_dersler :egitims="$egitims"></x-egitim_ara_dersler>
</x-egitim_layout>