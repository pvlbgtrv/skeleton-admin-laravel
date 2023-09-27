<footer class="footer footer-transparent d-print-none">
  <x-container>
    <div class="row text-center align-items-center flex-row-reverse">
      <div class="col-lg-auto ms-lg-auto">
        <x-footer.list>
          <x-footer.link url="https://tabler.io/docs" target="_blank" rel="noopener">
            {{ __('Documentation') }}
          </x-footer.link>
          <x-footer.link url="./license.html">
            {{ __('License') }}
          </x-footer.link>
          <x-footer.link url="https://github.com/tabler/tabler" target="_blank" rel="noopener">
            {{ __('Source code') }}
          </x-footer.link>
          <x-footer.link url="https://github.com/sponsors/codecalm" target="_blank" rel="noopener">
            @svg('i-heart', 'icon text-pink icon-filled icon-inline')
            {{ __('Sponsor') }}
          </x-footer.link>
        </x-footer.list>
      </div>
      <div class="col-12 col-lg-auto mt-3 mt-lg-0">
        <x-footer.list>
          <li class="list-inline-item">
            Copyright &copy; 2023
            <a href="." class="link-secondary">Tabler</a>.
            All rights reserved.
          </li>
        </x-footer.list>
      </div>
    </div>
  </x-container>
</footer>