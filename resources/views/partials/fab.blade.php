<div id="fabMenu" class="fixed bottom-6 right-6 z-50 flex flex-col items-center space-y-3 font-poppins">
          {{-- Menu Items --}}
          @foreach ([
              ['#gallery', 'fas fa-images', 'Gallery'],
              ['#gift', 'fas fa-gift', 'Gift'],
              ['#wish', 'fas fa-heart', 'Wishes'],
              ['#rsvp', 'fas fa-envelope', 'RSVP'],
              ['#countdown', 'fas fa-clock', 'Countdown'],
              ['#love-story', 'fas fa-book-open', 'Love Story'],
              ['#bride', 'fas fa-female', 'Bride'],
              ['#groom', 'fas fa-male', 'Groom'],
          ] as [$href, $icon, $title])
              <a href="{{ $href }}"
                 class="menu-item hidden scale-90 opacity-0 w-12 h-12 rounded-full bg-[#6B7A41] text-white flex items-center justify-center shadow-lg border border-white/50 hover:bg-[#5c6939] transition-all duration-300"
                 title="{{ $title }}">
                 <i class="{{ $icon }}"></i>
              </a>
          @endforeach
      
          {{-- Main Home Button --}}
          <button id="fabHome"
              class="w-14 h-14 rounded-full bg-[#6B7A41] text-white flex items-center justify-center shadow-lg border border-white/50 hover:bg-[#5c6939] transition">
              <i class="fas fa-home text-xl"></i>
          </button>
      
          {{-- Mute Button --}}
          <button id="muteBtn"
              class="w-14 h-14 rounded-full bg-[#6B7A41] text-white flex items-center justify-center shadow-lg border border-white/50 hover:bg-[#5c6939] transition">
              <i id="muteIcon" class="fas fa-volume-mute text-xl"></i>
          </button>
      </div>
      