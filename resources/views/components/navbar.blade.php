<nav
id="navbar"
class="fixed top-0 z-50 flex w-full items-center justify-between xl:px-56 md:px-24 xs:px-16 px-10 lg:py-12 py-6 transition-colors duration-300 ease-in-out text-white"
>
<div class="">
  <img id="logo" src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-auto lg:w-60 sm:w-40 w-36" />
</div>
<div class="">
  <ul class="hidden sm:flex items-center md:space-x-8 space-x-2 lg:text-lg md:text-sm text-xs">
    <li><a href="{{ url('/') }}">Home</a></li>
    <div class="relative flex flex-col">
      <button id="aboutDropDesk" class=" flex items-center lg:gap-x-2 gap-x-1">
        About Us
        <img id="dropdownIconDesk" src="assets/icons/dropdown.svg" alt="" class="">
      </button>
      <div id="dropdownAboutDesk" class="absolute w-[12rem] bg-main max-h-0 opacity-0 overflow-hidden transform -translate-y-5 transition-all duration-300 flex flex-col gap-y-3 p-4 rounded-md shadow-lg top-14">
        <a href="{{ url("profile")}}" class="block font-light">Profile</a>
        <a href="{{ url("leaders")}}" class="block font-light">Key Leaders</a>
        <a href="{{ url("projects")}}" class="block font-light">Our Projects</a>
        <a href="{{ url("service")}}" class="block font-light">Our Service</a>
      </div>
    </div>
    <li><a href="{{ url('sustainability') }}">Sustainability and Social Responsibilities</a></li>
    <li><a href="{{ url('collaboration') }}">Collaboration</a></li>
    <li><a href="{{ url('contact') }}">Contact Us</a></li>
  </ul>
</div>
<button id="openPopup" class="block sm:hidden"><img id="open" src="{{ asset('/assets/icons/menu.svg') }}" alt=""></button>
</nav>
<aside id="popup" class="fixed max-w-[30rem] w-full h-screen bg-main z-[100] flex flex-col items-center pt-28 right-0 translate-x-full transition-transform duration-300 text-white">
  <img id="logo" src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-auto w-60" />
  <ul class="flex flex-col max-w-64 items-center text-lg gap-y-7 mt-9">
      <li><a href="{{ url('/') }}">Home</a></li>
      <div class="relative flex flex-col items-center">
          <button id="aboutDrop" class="flex items-center gap-x-2">
            About
            <img id="dropdownIcon" src="assets/icons/dropdown.svg" alt="" class>
          </button>
          <div id="dropdownAbout" class="max-h-0 opacity-0 overflow-hidden transform -translate-y-5 transition-all duration-300 flex flex-col items-center gap-y-7">
            <a href="{{ url("profile")}}" class="block font-light">Profile</a>
            <a href="{{ url("leaders")}}" class="block font-light">Key Leaders</a>
            <a href="{{ url("projects")}}" class="block font-light">Our Projects</a>
            <a href="{{ url("service")}}" class="block font-light">Our Service</a>
          </div>
      </div>

      <li class="text-center"><a href="{{ url('sustainability') }}">Sustainability and Social Responsibilities</a></li>
      <li><a href="{{ url('collaboration') }}">Collaboration</a></li>
      <li><a href="{{ url('contact') }}">Contact Us</a></li>
  </ul>
  <button id="closePopup" class="absolute top-9 right-9"><img src="/assets/icons/close-pop.svg" alt=""></button>
</aside>

<script>
  let currentIndex = 0; // Indeks slide saat ini
  const slides = document.querySelectorAll("#slider > div");
  const indicators = document.querySelectorAll(".indicator-item");
  const slideCount = slides.length;

  function updateSlider() {
    // Perbarui transformasi slider
    const slider = document.getElementById("slider");
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;

    // Perbarui kelas untuk indikator
    indicators.forEach((indicator, index) => {
      if (index === currentIndex) {
        // Indikator aktif (background putih)
        indicator.classList.add("bg-white"); // Background putih untuk yang aktif
        indicator.classList.remove("opacity-50"); // Hapus opacity untuk yang aktif
        indicator.classList.add("opacity-100"); // Set opacity penuh untuk yang aktif
        indicator.classList.remove("border-white"); // Hapus border putih jika ada (jika diperlukan)
      } else {
        // Indikator non-aktif (border putih)
        indicator.classList.add("border-2"); // Tambahkan border jika perlu
        indicator.classList.add("border-white"); // Border putih untuk yang non-aktif
        indicator.classList.remove("bg-white"); // Hapus background untuk yang non-aktif
        indicator.classList.add("opacity-50"); // Atur opacity rendah untuk yang non-aktif
        indicator.classList.remove("opacity-100"); // Hapus opacity penuh untuk yang non-aktif
      }
    });
  }

  function changeSlide(index) {
    if (index < 0) {
      currentIndex = slideCount - 1; // Kembali ke slide terakhir
    } else if (index >= slideCount) {
      currentIndex = 0; // Kembali ke slide pertama
    } else {
      currentIndex = index; // Set slide index sesuai tombol diklik
    }

    updateSlider();
    clearInterval(slideInterval); // Hentikan interval saat interaksi manual
    startSlideInterval(); // Mulai kembali interval slide otomatis
  }

  function startSlideInterval() {
    slideInterval = setInterval(() => {
      currentIndex = (currentIndex + 1) % slideCount; // Ganti slide setiap 11 detik
      updateSlider();
    }, 4000); // Ganti slide setiap 4 detik (waktu diam 2 detik + transisi 2 detik)
  }

  // Event listener pada setiap indikator untuk klik manual
  indicators.forEach((indicator, index) => {
    indicator.addEventListener("click", () => {
      currentIndex = index; // Tentukan index berdasarkan klik
      updateSlider();
    });
  });

  // Mulai interval slide otomatis saat halaman dimuat
  window.onload = () => {
    startSlideInterval();
    updateSlider(); // Inisialisasi dengan kondisi awal
  };

  const popup = document.getElementById("popup");
const openBtn = document.getElementById("openPopup");
const closeBtn = document.getElementById("closePopup");

function disableScroll() {
    document.body.style.overflow = "hidden";
}

function enableScroll() {
    document.body.style.overflow = "";
}

openBtn.addEventListener("click", function () {
    popup.classList.remove("translate-x-full");
    popup.classList.add("translate-x-0");
    disableScroll();
});

closeBtn.addEventListener("click", function () {
    popup.classList.remove("translate-x-0");
    popup.classList.add("translate-x-full");
    enableScroll();
});

const about = document.getElementById("aboutDrop");
const dropdown = document.getElementById("dropdownAbout");
const dropdownIcon = document.getElementById('dropdownIcon')

about.addEventListener("click", function () {
  if (dropdown.classList.contains("max-h-0")) {
    dropdown.classList.remove("max-h-0", "opacity-0", "-translate-y-5");
    dropdown.classList.add("max-h-[200px]", "opacity-100", "translate-y-0", "mt-7");
    dropdownIcon.classList.add('rotate-180')
  } else {
    dropdown.classList.remove("max-h-[200px]", "opacity-100", "translate-y-0", "mt-7");
    dropdown.classList.add("max-h-0", "opacity-0", "-translate-y-5");
    dropdownIcon.classList.remove('rotate-180')
  }
});

const aboutDesktop = document.getElementById("aboutDropDesk");
const dropdownDesktop = document.getElementById("dropdownAboutDesk");
const dropdownIconDesktop = document.getElementById('dropdownIconDesk')

aboutDesktop.addEventListener("click", function () {
  if (dropdownDesktop.classList.contains("max-h-0")) {
    dropdownDesktop.classList.remove("max-h-0", "opacity-0", "-translate-y-5");
    dropdownDesktop.classList.add("max-h-auto", "opacity-100", "translate-y-0");
    dropdownIconDesk.classList.add('rotate-180')
  } else {
    dropdownDesktop.classList.remove("max-h-auto", "opacity-100", "translate-y-0");
    dropdownDesktop.classList.add("max-h-0", "opacity-0", "-translate-y-5");
    dropdownIconDesk.classList.remove('rotate-180')
  }
});

</script>