<div>
<!-- Sidebar -->
<div class=" mt-2 fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
        <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
          <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center h-8">
                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
              </div>
            </li>
            <!-- Annonces -->
            <li>
              <button wire:click="goToPageAds" type="button" class=" w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-2">
                  <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                  <svg class="w-7 h-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 504.8 504.8" style="enable-background:new 0 0 504.8 504.8;" xml:space="preserve">
                    <polygon style="fill:#CC9966;" points="456,47.4 484,92.2 456,103.4 428,92.2 "/>
                    <path style="fill:#42210B;" d="M504,392.2v59.2c0,16-12.8,28.8-28.8,28.8h-38.4c-16,0-28.8-12.8-28.8-28.8V96.2c0-1.6,0.8-3.2,1.6-4  l0,0l40-64c3.2-4.8,10.4-4.8,13.6,0l40,64l0,0c0.8,1.6,1.6,2.4,1.6,4v280v16H504z M488,451.4v-59.2h-16v-16h16v-268l-24,9.6v154.4  h-16V117.8l-24-9.6v268h40v16h-40v59.2c0,7.2,5.6,12.8,12.8,12.8h38.4C482.4,464.2,488,458.6,488,451.4z M484,92.2l-28-44.8  l-28,44.8l28,11.2L484,92.2z"/>
                    <path style="fill:#FF9900;" d="M488,392.2v59.2c0,7.2-5.6,12.8-12.8,12.8h-38.4c-7.2,0-12.8-5.6-12.8-12.8v-59.2h40h8H488z"/>
                    <path style="fill:#FFC600;" d="M488,108.2v268h-16v16h-8v-16h-40v-268l24,9.6v154.4h16V117.8L488,108.2z M464,344.2v-56h-16v56H464z  "/>
                    <g>
                      <rect x="448" y="288.2" style="fill:#42210B;" width="16" height="56"/>
                      <path style="fill:#42210B;" d="M400,192.2v280c0,4-4,8-8,8H80H8c-4,0-8-4-8-8v-336l0,0c2.4-31.2,28-56,60-56h300c4,0,8,3.2,8,8v96   h24C396,184.2,400,188.2,400,192.2z M384,464.2v-264h-24H88v264H384z M352,184.2v-16H104v-16h248v-24H176v-16h176v-16H60   c-24,0-44,20-44,44s20,44,44,44H352z M72,464.2v-264H60c-17.6,0-32.8-7.2-44-19.2v283.2H72z"/>
                    </g>
                    <path style="fill:#EE5656;" d="M384,200.2v264H88v-264h272H384z M360,320.2v-96c0-4-4-8-8-8H120c-4.8,0-8,4-8,8v96c0,4,3.2,8,8,8  h232C356,328.2,360,324.2,360,320.2z M352,376.2v-16h-56v16H352z M328,424.2v-16H120v16H328z M264,376.2v-16H120v16H264z"/>
                    <g>
                      <path style="fill:#42210B;" d="M360,224.2v96c0,4-4,8-8,8H120c-4.8,0-8-4-8-8v-96c0-4,3.2-8,8-8h232C356,216.2,360,220.2,360,224.2   z M344,312.2v-80H128v80H344z"/>
                      <rect x="296" y="360.2" style="fill:#42210B;" width="56" height="16"/>
                    </g>
                    <path style="fill:#D9CDC1;" d="M352,168.2v16H60c-24,0-44-20-44-44s20-44,44-44h292v16H176v16h176v24H104v16H352z M136,128.2v-16H88  v16H136z"/>
                    <path style="fill:#FFF8EF;" d="M352,112.2v-8H76c-24,0-44,20-44,44c0,13.6,6.4,26.4,16.8,34.4c3.2,0.8,7.2,1.6,11.2,1.6h292v-16H104  v-16h248v-24H176v-16H352z M136,128.2H88v-16h48V128.2z"/>
                    <rect x="128" y="232.2" style="fill:#FF9900;" width="216" height="80"/>
                    <g>
                      <rect x="120" y="408.2" style="fill:#42210B;" width="208" height="16"/>
                      <rect x="120" y="360.2" style="fill:#42210B;" width="144" height="16"/>
                      <rect x="88" y="112.2" style="fill:#42210B;" width="48" height="16"/>
                    </g>
                    <path style="fill:#E94545;" d="M72,200.2v264H16V181c11.2,12,26.4,19.2,44,19.2H72z"/>
                    <g>
                  </svg>                
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Mes annonces</span>
                <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">{{ auth()->user()->ads->count() }}</span>
              </button>
            </li>
            <!-- /Annonces -->

            <!-- Animaux -->
            <li>
              <button wire:click="goToPageAnim" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-6" width="150px" height="150px" viewBox="0 0 150 150" id="ART"><defs><style>.cls-1{fill:#915a31;}.cls-1,.cls-2,.cls-4,.cls-5,.cls-6{stroke:#000;stroke-miterlimit:10;}.cls-1,.cls-2{stroke-width:4px;}.cls-2{fill:#a06538;}.cls-3{fill:#d6d6d6;}.cls-4{fill:#333;}.cls-4,.cls-5,.cls-6{stroke-width:2px;}.cls-5{fill:none;}.cls-6{fill:#fff;}</style></defs><title/><path class="cls-1" d="M143.41,87.3c2.12,2.75,3.38,14.05-4.72,14.05-6.54,0-22.6-6.84-22.6-20.37s-18-51.44-18-51.44c22.45,0,43.66.88,43.66,28.83C141.76,58.37,141.29,84.55,143.41,87.3Z"/><path class="cls-1" d="M6.59,87.3c-2.12,2.75-3.38,14.05,4.72,14.05,6.54,0,22.6-6.84,22.6-20.37s18-51.44,18-51.44c-22.45,0-43.66.88-43.66,28.83C8.24,58.37,8.71,84.55,6.59,87.3Z"/><path class="cls-2" d="M119.27,73.22c0,47.32-16.91,61.52-44.27,61.52s-44.27-14.2-44.27-61.52,24.77-58,44.27-58S119.27,25.9,119.27,73.22Z" data-name="&lt;Path&gt;" id="_Path_"/><path class="cls-3" d="M104.69,121.79c-6.7,7.46-16.2,11-29.69,11s-23-3.49-29.69-11c2.94-12.49,8-26.67,14.06-35.75C67,74.6,69.49,38.94,67.62,17.82a48.91,48.91,0,0,1,14.76,0C80.51,38.94,83,74.6,90.63,86,96.69,95.12,101.75,109.3,104.69,121.79Z"/><path class="cls-4" d="M75.77,119.33c-3.18,0-15.65-16.29-14.62-18.84s5.21-5,14.62-5,13.59,2.42,14.64,5S79,119.33,75.77,119.33Z"/><path class="cls-5" d="M82.41,122.37c-.47,4.17-4.25,6-7.14,6s-6.67-1.84-7.13-6"/><circle class="cls-6" cx="53.02" cy="75" r="10.57"/><circle class="cls-6" cx="96.98" cy="75" r="10.57"/><circle cx="55.34" cy="75" r="5.92"/><circle cx="94.66" cy="75" r="5.92"/></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Mes animaux</span>
                <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">{{ auth()->user()->animals->count() }}</span>
              </button>
            </li>
            <!-- /Animaux -->

            <!-- Partie Propriétaire -->
            <li>
              <div x-data="{ open: false }">
                <button x-on:click="open = ! open" type="button" class=" w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                  <span class="inline-flex justify-center items-center ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-8"  viewBox="0 0 72 72" id="emoji" version="1.1">
                      <g id="color">
                        <path fill="#A57939" d="M14.375,47.125c0,0,0.2295,0.0762,0.4395,0.248c1.5,1.2295,1.333,2.9405,1.333,2.9405l1.3281,1.4678 L22,52.375l4.75,0.1875l6.375-0.4375l3.5625,1.125l2.75-1.375c0,0,0.0625-5.8437,0.7188-5.8437c0.75,0,1.7812,1.1044,1.7812,3.9687 c0,3.125-1.7939,6.2754-7.9375,6c-0.457-0.0205,0.25,1.8125,0.25,1.8125l-0.9375,2.75l-2,2.625L31,66.25l-0.3125,0.375 c0,0-0.2637,0.4063-0.8437,0.4063c-2.7813,0-3.2188-1.4688-1.5938-2.0938c0.1309-0.0508,0.375-1.75,0.375-1.75l-2-2.0205 l-3.917,0.708l-4.125,0.208L19,63.417l-1.708,3.166c0,0,1.124,0.459-0.459,0.459c-0.374,0-2.04-0.334-2.207-2.459l0.624-3.209 l-1.208-2.041l-0.833-2l-1.917-0.5l-4.124,0.624l-1.375-1l1.75-1.75L9.2188,52.5l3.2412-2.168L14.375,47.125z"/>
                        <path fill="#6A462F" d="M13.583,59.71l1.667,1.664c-0.125,1-2.0713,0.8213-2.1455,1.6465c-0.1045,1.166,0.5225,0.835,0.4844,1.6904 c-0.0821,1.8418-2.4346,1.7686-3.0293,1.1866c-0.3848-0.376-0.3096-0.792,0.1484-2.1465c0.8428-2.4932,2.3545-4.25,2.3545-4.25 L13.583,59.71z"/>
                      </g>
                      <g id="hair"/>
                      <g id="skin">
                        <circle cx="54.9688" cy="8.0938" r="3" fill="#FCEA2B"/>
                        <path fill="#FCEA2B" d="M61.2666,51.6416l-2.1318-13.501l-0.0814-0.0046L60,37l-0.6112-7.3345L60,30l-1.4307-10.9917 C58.2852,16.8267,56.252,15,54.0518,15H54c-2.2002,0-4.2002,1.8306-4.4463,4.0171L49,23.979l0.0469,0.0257L49,24l-0.6505,6.8286 l-5.4735,2.5358l-0.709,1.0127c0,0,0.9072,2.2705,3.3769,1.581l2.4663-1.5679l-0.061,0.6402L46.0137,66l2.1602,1l5.9759-21.0105 l3.3737,8.656L65.167,65l3-2L61.2666,51.6416z"/>
                      </g>
                      <g id="skin-shadow"/>
                      <g id="line">
                        <circle cx="54.9688" cy="8.0938" r="3" fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="2"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M49,35l-3.0479,30.0098C45.8408,66.1045,46.5205,67,47.4619,67s1.9492-0.8682,2.2383-1.9297l5.4863-20.1152 c0.2891-1.0615,1.043-2.667,1.6739-3.5674l2.1992-3.1397c0.6308-0.9003,1.1035-2.5371,1.0508-3.6357l-0.4922-10.1191"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M50,24"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M59.1348,38.1406l1.8203,11.5254c0.1709,1.0869,0.7793,2.7451,1.3496,3.6846l4.8242,7.9404 c0.5703,0.9395,0.3633,2.1592-0.4619,2.709c-0.8252,0.5498-2.0342,0.2764-2.6875-0.6094l-5.2686-7.1357 c-0.6533-0.8858-1.5146-2.4483-1.914-3.4727l-2.2031-5.6533"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M59.9248,29.5811L59.292,19.0347C59.1602,16.8389,57.252,15,55.0518,15H55c-2.2002,0-4.2002,1.8306-4.4463,4.0171L50.084,23.23"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M55.167,20l-3.0684,6.4443c-0.4726,0.9932-1.6269,2.2754-2.5654,2.8487l-7.5957,4.6445"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M13,57l5-5c0,0,17-6,23.9375-18.0625"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M40,47c2,5-4,8-7,6c-0.7715-0.5137-3.8535-1.3145-7-1l-8.3281,0.3281L16,51.3125"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M27,58c0,2,1.25,4.501,1.25,4.501S28.6328,63.7354,28,65c-1,2,2,3,3,1s0.832-3.6641,1-4c0.4033-0.8066,1.999-1.917,2-4c0-1,0-1,0-1"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M27,60c-2.041,2.001-4.625,2-8,2"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M14,59c-1.0156,0.9287-2,1-3,2s-1,3,0,4"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M14,48l-1,2c0,0-2.2441,0.2998-3,1c-0.5801,0.5371-1,3-1,3s-2.8779,1.5928-3,2c-0.0937,0.3125,1.293,2,2,2c1,0,4-1,4-1c2,0,2,3,3,4 c0.4102,0.4102,0,3-0.334,3.959C13.9863,66.9131,17,68,17.834,65.834C18.1387,65.04,19,63,19,61"/>
                      </g>
                    </svg>                  </span>
                  <span class="ml-2 text-sm tracking-wide truncate">Mes demandes de garde</span>
                </button>
                <div x-show="open" x-transition class="pl-16">
                  <ul>
                    <li>
                      <button wire:click="goToPageGardeSent" type="button" class=" w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <!-- Generator: Adobe Illustrator 18.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <!-- svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"-->
                        <svg class="w-4 h-4" fill="white" stroke="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 495.003 495.003" style="enable-background:new 0 0 495.003 495.003;" xml:space="preserve">
                          <g id="XMLID_51_">
                            <path id="XMLID_53_" d="M164.711,456.687c0,2.966,1.647,5.686,4.266,7.072c2.617,1.385,5.799,1.207,8.245-0.468l55.09-37.616   l-67.6-32.22V456.687z"/>
                            <path id="XMLID_52_" d="M492.431,32.443c-1.513-1.395-3.466-2.125-5.44-2.125c-1.19,0-2.377,0.264-3.5,0.816L7.905,264.422   c-4.861,2.389-7.937,7.353-7.904,12.783c0.033,5.423,3.161,10.353,8.057,12.689l125.342,59.724l250.62-205.99L164.455,364.414   l156.145,74.4c1.918,0.919,4.012,1.376,6.084,1.376c1.768,0,3.519-0.322,5.186-0.977c3.637-1.438,6.527-4.318,7.97-7.956   L494.436,41.257C495.66,38.188,494.862,34.679,492.431,32.443z"/>
                          </g>
                        </svg>  
                        <span class="ml-2 text-sm tracking-wide truncate">Envoyées</span>
                        <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">{{ auth()->user()->proposals->count() }}</span>
                      </button>
                    </li>
                    <li>
                      <button wire:click="goToPageGardeSentWait" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <!-- Generator: Adobe Illustrator 18.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->  
                        <!--svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd" -->
                        <svg fill="white" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve">
                          <g>
                            <path d="M251.01,277.015h-17.683l-0.002-31.558c0-31.639-17.358-60.726-48.876-81.901c-3.988-2.682-6.466-8.45-6.466-15.055   s2.478-12.373,6.464-15.053c31.52-21.178,48.878-50.264,48.88-81.904V19.985h17.683c5.518,0,9.992-4.475,9.992-9.993   c0-5.518-4.475-9.992-9.992-9.992H45.99c-5.518,0-9.992,4.475-9.992,9.992c0,5.519,4.475,9.993,9.992,9.993h17.683v31.558   c0,31.642,17.357,60.728,48.875,81.903c3.989,2.681,6.467,8.448,6.467,15.054s-2.478,12.373-6.466,15.053   c-31.519,21.177-48.876,50.263-48.876,81.903v31.558H45.99c-5.518,0-9.992,4.475-9.992,9.993c0,5.519,4.475,9.992,9.992,9.992   h205.02c5.518,0,9.992-4.474,9.992-9.992C261.002,281.489,256.527,277.015,251.01,277.015z M83.657,245.456   c0-33.425,25.085-55.269,40.038-65.314c9.583-6.441,15.304-18.269,15.304-31.642s-5.721-25.2-15.305-31.642   c-14.952-10.046-40.037-31.89-40.037-65.315V19.985h129.686l-0.002,31.558c0,33.424-25.086,55.269-40.041,65.317   c-9.581,6.441-15.301,18.269-15.301,31.64s5.72,25.198,15.303,31.642c14.953,10.047,40.039,31.892,40.041,65.314v31.558h-3.312   c-8.215-30.879-50.138-64.441-55.377-68.537c-3.616-2.828-8.694-2.826-12.309,0c-5.239,4.095-47.163,37.658-55.378,68.537h-3.311   V245.456z M189.033,277.015h-81.067c6.584-15.391,25.383-34.873,40.534-47.76C163.652,242.142,182.45,261.624,189.033,277.015z"/>
                            <path d="M148.497,191.014c2.628,0,5.206-1.069,7.064-2.928c1.868-1.858,2.928-4.437,2.928-7.064s-1.06-5.206-2.928-7.065   c-1.858-1.857-4.436-2.927-7.064-2.927c-2.628,0-5.206,1.069-7.064,2.927c-1.859,1.859-2.928,4.438-2.928,7.065   s1.068,5.206,2.928,7.064C143.291,189.944,145.869,191.014,148.497,191.014z"/>
                            <path d="M148.5,138.019c5.519,0,9.992-4.474,9.992-9.992v-17.664c0-5.518-4.474-9.993-9.992-9.993s-9.992,4.475-9.992,9.993v17.664   C138.508,133.545,142.981,138.019,148.5,138.019z"/>
                          </g>
                        </svg>
                        <span class="ml-2 text-sm tracking-wide truncate">En attente</span>
                        <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">{{ auth()->user()->proposals->where('validated', 2)->count() }}</span>
                      </button>
                    </li>
                    <li>
                      <button wire:click="goToPageGardeSentAccepted" type="button" class=" w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg class="w-4 h-4" fill="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 487.736 487.736" style="enable-background:new 0 0 487.736 487.736;" xml:space="preserve">
                          <g>
                            <path d="M26.2,140.611c-6.4,11.7-11.8,23.9-15.9,36.6c-2.5,6.2-3.5,12.8-5.2,19.2c-1.8,6.3-2.4,13.3-3.4,20.1l-0.7,5.1l-0.3,2.5    l-0.1,2.3l-0.3,9.3l-0.2,4.6l-0.1,2.3v1.2v0.3v0.8v0.1v0.2v0.6l0.6,9.9l0.7,9.9c0.4,3.3,1,6.5,1.6,9.8l1.6,9.8    c0.5,3.3,1.6,6.4,2.4,9.6c4.3,23.3,12.6,46.3,25.4,66.9c12.7,20.6,29.2,39.1,48.5,54.2s41.4,26.9,65,34.5l18,4.8    c6.1,1.4,12.7,2.2,19.1,3.2l4.8,0.7l4.2,0.3l8.4,0.5l4.2,0.2l2.1,0.1l1.1,0.1h1.3h0.3h0.6l9.3-0.4c49.6-2.1,98.2-22.6,134.6-56.2    c18.3-16.7,33.6-36.6,45.2-58.5c5.9-11,10.6-22.2,14.6-34.3l2.8-9.3l1.4-4.7c0.4-1.5,0.6-2.8,0.9-4.2l1.8-8.2l0.9-4.1l0.2-1l0.4-2    l0.4-2.3c1.5-8.8-1.3-22.8-3.8-27c-2.4-4.1-4.7-3.4-6.7,0.1c-2.1,3.6-4.1,10-6.4,17.5c-8.2,24.6-19,49.9-35.4,72.6    c-16.3,22.7-37,43.4-61.6,58.5c-29.2,18.8-63.8,27.8-98.1,27.5h-0.8h-0.3l-1.5-0.1l-3.5-0.2l-7-0.5l-7-0.5    c-2.2-0.3-4.1-0.7-6.1-1.1c-4-0.8-8-1.4-12-2.2l-12.3-3.4c-16.1-5.3-31.9-11.9-45.9-21.6c-14-9.5-27.2-20.3-38-33.4    c-10.8-12.9-20.6-26.9-27.3-42.5c-6.8-15.6-12.2-31.8-14.4-48.6l-1.1-6.3c-0.3-2.1-0.3-4.2-0.5-6.3l-0.4-6.4l-0.2-3.2l-0.1-1.6    l-0.1-0.8v-0.4v-0.2v-0.1l0.4-13.3c0.1-2.3,0-4.9,0.3-6.9l0.8-6c0.8-4,1.1-7.8,2.3-11.9l3.4-12.1c1-4.1,3-7.9,4.3-11.8l2.3-5.9    c0.8-2,1.9-3.8,2.7-5.7c11.5-23.9,28.3-45.2,48.7-62c20.7-16.5,44.8-28.4,70.4-34.7c51.3-12.9,107.8-1.9,151.1,29.7    c15.6,11.1,28.3,23.1,37.2,28.6c-19.1,20.1-38.1,40.5-57.2,60.6c-30.1,22.5-57.8,48-84.8,74.5c-22-21.9-44.2-43.7-65.4-66.4    c-2.5-2.7-9-4.3-12-3.8c-6,0.9-5.6,7.1-3,14.2c8.8,23.5,25.1,46.4,44.2,67.2l25.2,27.7c5.5,6.1,14.9,6.5,20.9,1l1-1    c41.2-37.3,82.3-74.7,120-116l18.8-17.1c39.2-36.6,77.6-74.1,112.6-114.7c9.9-11.5,15.6-23.7,8.4-29.3c-6.6-5.1-18.5-1.9-30.2,8.4    c-21.1,18.5-42.4,37.1-62.2,57c-8.3,8.4-16.5,16.9-24.7,25.4c-0.7-2.2-1.7-4.5-3-7c-4.9-10-14.3-22.6-28.5-34.2    c-25.4-20.7-56.1-35.6-88.8-42.3l-12.2-1.8l-12.9-1.4l-11.6-0.6h-0.7h-0.4h-0.9l-1.6,0.1l-3.1,0.1l-6.3,0.2    c-4.2,0.3-8.4,0.1-12.5,0.8l-12.4,1.8l-6.2,0.9l-6.1,1.5l-12.1,3.1C96.5,57.411,51.9,93.811,26.2,140.611z"/>
                          </g>
                        </svg>
                        <span class="ml-2 text-sm tracking-wide truncate">Validées</span>
                        <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">{{ auth()->user()->proposals->where('validated', 1)->count() }}</span>
                      </button>
                    </li>
                    <li>
                      <button wire:click="goToPageGardeSentDeclined" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg class="w-4 h-4" fill="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 300.003 300.003" style="enable-background:new 0 0 300.003 300.003;" xml:space="preserve">
                          <g>
                            <path d="M150,0C67.159,0,0.001,67.159,0.001,150c0,82.838,67.157,150.003,149.997,150.003S300.002,232.838,300.002,150    C300.002,67.159,232.839,0,150,0z M206.584,207.171c-5.989,5.984-15.691,5.984-21.675,0l-34.132-34.132l-35.686,35.686    c-5.986,5.984-15.689,5.984-21.672,0c-5.989-5.991-5.989-15.691,0-21.68l35.683-35.683L95.878,118.14    c-5.984-5.991-5.984-15.691,0-21.678c5.986-5.986,15.691-5.986,21.678,0l33.222,33.222l31.671-31.673    c5.986-5.984,15.694-5.986,21.675,0c5.989,5.991,5.989,15.697,0,21.678l-31.668,31.671l34.13,34.132    C212.57,191.475,212.573,201.183,206.584,207.171z"/>
                          </g>
                        </svg>
                        <span class="ml-2 text-sm tracking-wide truncate">Refusées</span>
                        <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">{{ auth()->user()->proposals->where('validated', 0)->count() }}</span>
                      </button>
                    </li>
                    <li>
                      <button type="button" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg class="w-4 h-4" fill="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 489.2 489.2" style="enable-background:new 0 0 489.2 489.2;" xml:space="preserve">
                          <g>
                            <path d="M177.8,238.1c0,4.5-3.6,8.1-8.1,8.1h-30.4c-4.5,0-8.1-3.6-8.1-8.1v-30.4c0-4.5,3.6-8.1,8.1-8.1h30.4    
                              c4.5,0,8.1,3.6,8.1,8.1V238.1z M241.3,207.8c0-4.5-3.6-8.1-8.1-8.1h-30.4c-4.5,0-8.1,3.6-8.1,8.1v30.4c0,4.5,3.6,8.1,8.1,8.1h30.4    
                              c4.5,0,8.1-3.6,8.1-8.1V207.8z M304.8,207.8c0-4.5-3.6-8.1-8.1-8.1h-30.4c-4.5,0-8.1,3.6-8.1,8.1v30.4c0,4.5,3.6,8.1,8.1,8.1h30.4 
                              c4.5,0,8.1-3.6,8.1-8.1V207.8z M177.8,269.6c0-4.5-3.6-8.1-8.1-8.1h-30.4c-4.5,0-8.1,3.6-8.1,8.1V300c0,4.5,3.6,8.1,8.1,8.1h30.4    
                              c4.5,0,8.1-3.6,8.1-8.1V269.6z M241.3,269.6c0-4.5-3.6-8.1-8.1-8.1h-30.4c-4.5,0-8.1,3.6-8.1,8.1V300c0,4.5,3.6,8.1,8.1,8.1h30.4    
                              c4.5,0,8.1-3.6,8.1-8.1V269.6z M296.7,261.5h-30.4c-4.5,0-8.1,3.6-8.1,8.1V300c0,4.5,3.6,8.1,8.1,8.1h30.4c4.5,0,8.1-3.6,8.1-8.1    
                              v-30.4C304.8,265.1,301.2,261.5,296.7,261.5z M106.1,323.3H75.8c-4.5,0-8.1,3.6-8.1,8.1v30.4c0,4.5,3.6,8.1,8.1,8.1h30.4    
                              c4.5,0,8.1-3.6,8.1-8.1v-30.4C114.3,326.9,110.6,323.3,106.1,323.3z M114.3,269.6c0-4.5-3.6-8.1-8.1-8.1H75.8    
                              c-4.5,0-8.1,3.6-8.1,8.1V300c0,4.5,3.6,8.1,8.1,8.1h30.4c4.5,0,8.1-3.6,8.1-8.1V269.6z M233.2,323.3h-30.4c-4.5,0-8.1,3.6-8.1,8.1    
                              v30.4c0,4.5,3.6,8.1,8.1,8.1h30.4c4.5,0,8.1-3.6,8.1-8.1v-30.4C241.3,326.9,237.7,323.3,233.2,323.3z M169.7,323.3h-30.4    
                              c-4.5,0-8.1,3.6-8.1,8.1v30.4c0,4.5,3.6,8.1,8.1,8.1h30.4c4.5,0,8.1-3.6,8.1-8.1v-30.4C177.8,326.9,174.2,323.3,169.7,323.3z
                                M360.2,246.3c4.5,0,8.1-3.6,8.1-8.1v-30.4c0-4.5-3.6-8.1-8.1-8.1h-30.4c-4.5,0-8.1,3.6-8.1,8.1v30.4c0,4.5,3.6,8.1,8.1,8.1H360.2    
                              z M47.7,435.9h230.7c-3.7-11.6-5.8-24-5.9-36.8H47.7c-6,0-10.8-4.9-10.8-10.8V171h361.7v101.1c12.8,0.1,25.2,2,36.8,5.7V94.9 
                              c0-26.3-21.4-47.7-47.7-47.7h-53.4V17.8c0-9.6-7.8-17.4-17.4-17.4h-27.1c-9.6,0-17.4,7.8-17.4,17.4v29.5H163V17.8    
                              c0-9.6-7.8-17.4-17.4-17.4h-27.1c-9.6,0-17.4,7.8-17.4,17.4v29.5H47.7C21.4,47.3,0,68.7,0,95v293.3C0,414.5,21.4,435.9,47.7,435.9    
                              z M489.2,397.7c0,50.3-40.8,91.1-91.1,91.1S307,448,307,397.7s40.8-91.1,91.1-91.1S489.2,347.4,489.2,397.7z M444.1,374.1    
                              c0-2.9-1.1-5.7-3.2-7.7c-4.3-4.3-11.2-4.3-15.5,0L385.8,406l-15.2-15.2c-4.3-4.3-11.2-4.3-15.5,0c-2.1,2.1-3.2,4.8-3.2,7.7    
                              c0,2.9,1.1,5.7,3.2,7.7l22.9,22.9c4.3,4.3,11.2,4.3,15.5,0l47.3-47.3C443,379.8,444.1,377,444.1,374.1z"/>
                          </g>
                        </svg>
                        <span class="ml-2 text-sm tracking-wide truncate">Réalisées</span>
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <!-- /Partie Propriétaire -->

            <!-- Partie Pet-Sitter -->
            <li>
              <div x-data="{ open: false }">
                <button x-on:click="open = ! open" type="button" class=" w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                  <span class="inline-flex justify-center items-center ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-8"  viewBox="0 0 72 72" id="emoji" version="1.1">
                      <g id="color">
                        <path fill="#A57939" d="M14.375,47.125c0,0,0.2295,0.0762,0.4395,0.248c1.5,1.2295,1.333,2.9405,1.333,2.9405l1.3281,1.4678 L22,52.375l4.75,0.1875l6.375-0.4375l3.5625,1.125l2.75-1.375c0,0,0.0625-5.8437,0.7188-5.8437c0.75,0,1.7812,1.1044,1.7812,3.9687 c0,3.125-1.7939,6.2754-7.9375,6c-0.457-0.0205,0.25,1.8125,0.25,1.8125l-0.9375,2.75l-2,2.625L31,66.25l-0.3125,0.375 c0,0-0.2637,0.4063-0.8437,0.4063c-2.7813,0-3.2188-1.4688-1.5938-2.0938c0.1309-0.0508,0.375-1.75,0.375-1.75l-2-2.0205 l-3.917,0.708l-4.125,0.208L19,63.417l-1.708,3.166c0,0,1.124,0.459-0.459,0.459c-0.374,0-2.04-0.334-2.207-2.459l0.624-3.209 l-1.208-2.041l-0.833-2l-1.917-0.5l-4.124,0.624l-1.375-1l1.75-1.75L9.2188,52.5l3.2412-2.168L14.375,47.125z"/>
                        <path fill="#6A462F" d="M13.583,59.71l1.667,1.664c-0.125,1-2.0713,0.8213-2.1455,1.6465c-0.1045,1.166,0.5225,0.835,0.4844,1.6904 c-0.0821,1.8418-2.4346,1.7686-3.0293,1.1866c-0.3848-0.376-0.3096-0.792,0.1484-2.1465c0.8428-2.4932,2.3545-4.25,2.3545-4.25 L13.583,59.71z"/>
                      </g>
                      <g id="hair"/>
                      <g id="skin">
                        <circle cx="54.9688" cy="8.0938" r="3" fill="#FCEA2B"/>
                        <path fill="#FCEA2B" d="M61.2666,51.6416l-2.1318-13.501l-0.0814-0.0046L60,37l-0.6112-7.3345L60,30l-1.4307-10.9917 C58.2852,16.8267,56.252,15,54.0518,15H54c-2.2002,0-4.2002,1.8306-4.4463,4.0171L49,23.979l0.0469,0.0257L49,24l-0.6505,6.8286 l-5.4735,2.5358l-0.709,1.0127c0,0,0.9072,2.2705,3.3769,1.581l2.4663-1.5679l-0.061,0.6402L46.0137,66l2.1602,1l5.9759-21.0105 l3.3737,8.656L65.167,65l3-2L61.2666,51.6416z"/>
                      </g>
                      <g id="skin-shadow"/>
                      <g id="line">
                        <circle cx="54.9688" cy="8.0938" r="3" fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="2"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M49,35l-3.0479,30.0098C45.8408,66.1045,46.5205,67,47.4619,67s1.9492-0.8682,2.2383-1.9297l5.4863-20.1152 c0.2891-1.0615,1.043-2.667,1.6739-3.5674l2.1992-3.1397c0.6308-0.9003,1.1035-2.5371,1.0508-3.6357l-0.4922-10.1191"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M50,24"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M59.1348,38.1406l1.8203,11.5254c0.1709,1.0869,0.7793,2.7451,1.3496,3.6846l4.8242,7.9404 c0.5703,0.9395,0.3633,2.1592-0.4619,2.709c-0.8252,0.5498-2.0342,0.2764-2.6875-0.6094l-5.2686-7.1357 c-0.6533-0.8858-1.5146-2.4483-1.914-3.4727l-2.2031-5.6533"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M59.9248,29.5811L59.292,19.0347C59.1602,16.8389,57.252,15,55.0518,15H55c-2.2002,0-4.2002,1.8306-4.4463,4.0171L50.084,23.23"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M55.167,20l-3.0684,6.4443c-0.4726,0.9932-1.6269,2.2754-2.5654,2.8487l-7.5957,4.6445"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M13,57l5-5c0,0,17-6,23.9375-18.0625"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M40,47c2,5-4,8-7,6c-0.7715-0.5137-3.8535-1.3145-7-1l-8.3281,0.3281L16,51.3125"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M27,58c0,2,1.25,4.501,1.25,4.501S28.6328,63.7354,28,65c-1,2,2,3,3,1s0.832-3.6641,1-4c0.4033-0.8066,1.999-1.917,2-4c0-1,0-1,0-1"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M27,60c-2.041,2.001-4.625,2-8,2"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M14,59c-1.0156,0.9287-2,1-3,2s-1,3,0,4"/>
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M14,48l-1,2c0,0-2.2441,0.2998-3,1c-0.5801,0.5371-1,3-1,3s-2.8779,1.5928-3,2c-0.0937,0.3125,1.293,2,2,2c1,0,4-1,4-1c2,0,2,3,3,4 c0.4102,0.4102,0,3-0.334,3.959C13.9863,66.9131,17,68,17.834,65.834C18.1387,65.04,19,63,19,61"/>
                      </g>
                    </svg>                  </span>
                  <span class="ml-2 text-sm tracking-wide truncate">Mon espace Pet-Sitter</span>
                </button>
                <div x-show="open" x-transition class="pl-16">
                  <ul>
                    <li>
                      <button wire:click="goToPageGardeReceivedWait" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <!-- Generator: Adobe Illustrator 18.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->  
                        <!--svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd" -->
                        <svg fill="white" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve">
                          <g>
                            <path d="M251.01,277.015h-17.683l-0.002-31.558c0-31.639-17.358-60.726-48.876-81.901c-3.988-2.682-6.466-8.45-6.466-15.055   s2.478-12.373,6.464-15.053c31.52-21.178,48.878-50.264,48.88-81.904V19.985h17.683c5.518,0,9.992-4.475,9.992-9.993   c0-5.518-4.475-9.992-9.992-9.992H45.99c-5.518,0-9.992,4.475-9.992,9.992c0,5.519,4.475,9.993,9.992,9.993h17.683v31.558   c0,31.642,17.357,60.728,48.875,81.903c3.989,2.681,6.467,8.448,6.467,15.054s-2.478,12.373-6.466,15.053   c-31.519,21.177-48.876,50.263-48.876,81.903v31.558H45.99c-5.518,0-9.992,4.475-9.992,9.993c0,5.519,4.475,9.992,9.992,9.992   h205.02c5.518,0,9.992-4.474,9.992-9.992C261.002,281.489,256.527,277.015,251.01,277.015z M83.657,245.456   c0-33.425,25.085-55.269,40.038-65.314c9.583-6.441,15.304-18.269,15.304-31.642s-5.721-25.2-15.305-31.642   c-14.952-10.046-40.037-31.89-40.037-65.315V19.985h129.686l-0.002,31.558c0,33.424-25.086,55.269-40.041,65.317   c-9.581,6.441-15.301,18.269-15.301,31.64s5.72,25.198,15.303,31.642c14.953,10.047,40.039,31.892,40.041,65.314v31.558h-3.312   c-8.215-30.879-50.138-64.441-55.377-68.537c-3.616-2.828-8.694-2.826-12.309,0c-5.239,4.095-47.163,37.658-55.378,68.537h-3.311   V245.456z M189.033,277.015h-81.067c6.584-15.391,25.383-34.873,40.534-47.76C163.652,242.142,182.45,261.624,189.033,277.015z"/>
                            <path d="M148.497,191.014c2.628,0,5.206-1.069,7.064-2.928c1.868-1.858,2.928-4.437,2.928-7.064s-1.06-5.206-2.928-7.065   c-1.858-1.857-4.436-2.927-7.064-2.927c-2.628,0-5.206,1.069-7.064,2.927c-1.859,1.859-2.928,4.438-2.928,7.065   s1.068,5.206,2.928,7.064C143.291,189.944,145.869,191.014,148.497,191.014z"/>
                            <path d="M148.5,138.019c5.519,0,9.992-4.474,9.992-9.992v-17.664c0-5.518-4.474-9.993-9.992-9.993s-9.992,4.475-9.992,9.993v17.664   C138.508,133.545,142.981,138.019,148.5,138.019z"/>
                          </g>
                        </svg>
                        <span class="ml-2 text-sm tracking-wide truncate">En attente</span>
                      </button>
                    </li>
                    <li>
                      <button wire:click="goToPageGardeReceivedAccepted" type="button" class=" w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg class="w-4 h-4" fill="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 487.736 487.736" style="enable-background:new 0 0 487.736 487.736;" xml:space="preserve">
                          <g>
                            <path d="M26.2,140.611c-6.4,11.7-11.8,23.9-15.9,36.6c-2.5,6.2-3.5,12.8-5.2,19.2c-1.8,6.3-2.4,13.3-3.4,20.1l-0.7,5.1l-0.3,2.5    l-0.1,2.3l-0.3,9.3l-0.2,4.6l-0.1,2.3v1.2v0.3v0.8v0.1v0.2v0.6l0.6,9.9l0.7,9.9c0.4,3.3,1,6.5,1.6,9.8l1.6,9.8    c0.5,3.3,1.6,6.4,2.4,9.6c4.3,23.3,12.6,46.3,25.4,66.9c12.7,20.6,29.2,39.1,48.5,54.2s41.4,26.9,65,34.5l18,4.8    c6.1,1.4,12.7,2.2,19.1,3.2l4.8,0.7l4.2,0.3l8.4,0.5l4.2,0.2l2.1,0.1l1.1,0.1h1.3h0.3h0.6l9.3-0.4c49.6-2.1,98.2-22.6,134.6-56.2    c18.3-16.7,33.6-36.6,45.2-58.5c5.9-11,10.6-22.2,14.6-34.3l2.8-9.3l1.4-4.7c0.4-1.5,0.6-2.8,0.9-4.2l1.8-8.2l0.9-4.1l0.2-1l0.4-2    l0.4-2.3c1.5-8.8-1.3-22.8-3.8-27c-2.4-4.1-4.7-3.4-6.7,0.1c-2.1,3.6-4.1,10-6.4,17.5c-8.2,24.6-19,49.9-35.4,72.6    c-16.3,22.7-37,43.4-61.6,58.5c-29.2,18.8-63.8,27.8-98.1,27.5h-0.8h-0.3l-1.5-0.1l-3.5-0.2l-7-0.5l-7-0.5    c-2.2-0.3-4.1-0.7-6.1-1.1c-4-0.8-8-1.4-12-2.2l-12.3-3.4c-16.1-5.3-31.9-11.9-45.9-21.6c-14-9.5-27.2-20.3-38-33.4    c-10.8-12.9-20.6-26.9-27.3-42.5c-6.8-15.6-12.2-31.8-14.4-48.6l-1.1-6.3c-0.3-2.1-0.3-4.2-0.5-6.3l-0.4-6.4l-0.2-3.2l-0.1-1.6    l-0.1-0.8v-0.4v-0.2v-0.1l0.4-13.3c0.1-2.3,0-4.9,0.3-6.9l0.8-6c0.8-4,1.1-7.8,2.3-11.9l3.4-12.1c1-4.1,3-7.9,4.3-11.8l2.3-5.9    c0.8-2,1.9-3.8,2.7-5.7c11.5-23.9,28.3-45.2,48.7-62c20.7-16.5,44.8-28.4,70.4-34.7c51.3-12.9,107.8-1.9,151.1,29.7    c15.6,11.1,28.3,23.1,37.2,28.6c-19.1,20.1-38.1,40.5-57.2,60.6c-30.1,22.5-57.8,48-84.8,74.5c-22-21.9-44.2-43.7-65.4-66.4    c-2.5-2.7-9-4.3-12-3.8c-6,0.9-5.6,7.1-3,14.2c8.8,23.5,25.1,46.4,44.2,67.2l25.2,27.7c5.5,6.1,14.9,6.5,20.9,1l1-1    c41.2-37.3,82.3-74.7,120-116l18.8-17.1c39.2-36.6,77.6-74.1,112.6-114.7c9.9-11.5,15.6-23.7,8.4-29.3c-6.6-5.1-18.5-1.9-30.2,8.4    c-21.1,18.5-42.4,37.1-62.2,57c-8.3,8.4-16.5,16.9-24.7,25.4c-0.7-2.2-1.7-4.5-3-7c-4.9-10-14.3-22.6-28.5-34.2    c-25.4-20.7-56.1-35.6-88.8-42.3l-12.2-1.8l-12.9-1.4l-11.6-0.6h-0.7h-0.4h-0.9l-1.6,0.1l-3.1,0.1l-6.3,0.2    c-4.2,0.3-8.4,0.1-12.5,0.8l-12.4,1.8l-6.2,0.9l-6.1,1.5l-12.1,3.1C96.5,57.411,51.9,93.811,26.2,140.611z"/>
                          </g>
                        </svg>
                        <span class="ml-2 text-sm tracking-wide truncate">Validées</span>
                      </button>
                    </li>
                    <li>
                      <button wire:click="goToPageGardeReceivedDeclined" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg class="w-4 h-4" fill="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 300.003 300.003" style="enable-background:new 0 0 300.003 300.003;" xml:space="preserve">
                          <g>
                            <path d="M150,0C67.159,0,0.001,67.159,0.001,150c0,82.838,67.157,150.003,149.997,150.003S300.002,232.838,300.002,150    C300.002,67.159,232.839,0,150,0z M206.584,207.171c-5.989,5.984-15.691,5.984-21.675,0l-34.132-34.132l-35.686,35.686    c-5.986,5.984-15.689,5.984-21.672,0c-5.989-5.991-5.989-15.691,0-21.68l35.683-35.683L95.878,118.14    c-5.984-5.991-5.984-15.691,0-21.678c5.986-5.986,15.691-5.986,21.678,0l33.222,33.222l31.671-31.673    c5.986-5.984,15.694-5.986,21.675,0c5.989,5.991,5.989,15.697,0,21.678l-31.668,31.671l34.13,34.132    C212.57,191.475,212.573,201.183,206.584,207.171z"/>
                          </g>
                        </svg>
                        <span class="ml-2 text-sm tracking-wide truncate">Refusées</span>
                      </button>
                    </li>
                    <li>
                      <button type="button" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg class="w-4 h-4" fill="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 489.2 489.2" style="enable-background:new 0 0 489.2 489.2;" xml:space="preserve">
                          <g>
                            <path d="M177.8,238.1c0,4.5-3.6,8.1-8.1,8.1h-30.4c-4.5,0-8.1-3.6-8.1-8.1v-30.4c0-4.5,3.6-8.1,8.1-8.1h30.4    
                              c4.5,0,8.1,3.6,8.1,8.1V238.1z M241.3,207.8c0-4.5-3.6-8.1-8.1-8.1h-30.4c-4.5,0-8.1,3.6-8.1,8.1v30.4c0,4.5,3.6,8.1,8.1,8.1h30.4    
                              c4.5,0,8.1-3.6,8.1-8.1V207.8z M304.8,207.8c0-4.5-3.6-8.1-8.1-8.1h-30.4c-4.5,0-8.1,3.6-8.1,8.1v30.4c0,4.5,3.6,8.1,8.1,8.1h30.4 
                              c4.5,0,8.1-3.6,8.1-8.1V207.8z M177.8,269.6c0-4.5-3.6-8.1-8.1-8.1h-30.4c-4.5,0-8.1,3.6-8.1,8.1V300c0,4.5,3.6,8.1,8.1,8.1h30.4    
                              c4.5,0,8.1-3.6,8.1-8.1V269.6z M241.3,269.6c0-4.5-3.6-8.1-8.1-8.1h-30.4c-4.5,0-8.1,3.6-8.1,8.1V300c0,4.5,3.6,8.1,8.1,8.1h30.4    
                              c4.5,0,8.1-3.6,8.1-8.1V269.6z M296.7,261.5h-30.4c-4.5,0-8.1,3.6-8.1,8.1V300c0,4.5,3.6,8.1,8.1,8.1h30.4c4.5,0,8.1-3.6,8.1-8.1    
                              v-30.4C304.8,265.1,301.2,261.5,296.7,261.5z M106.1,323.3H75.8c-4.5,0-8.1,3.6-8.1,8.1v30.4c0,4.5,3.6,8.1,8.1,8.1h30.4    
                              c4.5,0,8.1-3.6,8.1-8.1v-30.4C114.3,326.9,110.6,323.3,106.1,323.3z M114.3,269.6c0-4.5-3.6-8.1-8.1-8.1H75.8    
                              c-4.5,0-8.1,3.6-8.1,8.1V300c0,4.5,3.6,8.1,8.1,8.1h30.4c4.5,0,8.1-3.6,8.1-8.1V269.6z M233.2,323.3h-30.4c-4.5,0-8.1,3.6-8.1,8.1    
                              v30.4c0,4.5,3.6,8.1,8.1,8.1h30.4c4.5,0,8.1-3.6,8.1-8.1v-30.4C241.3,326.9,237.7,323.3,233.2,323.3z M169.7,323.3h-30.4    
                              c-4.5,0-8.1,3.6-8.1,8.1v30.4c0,4.5,3.6,8.1,8.1,8.1h30.4c4.5,0,8.1-3.6,8.1-8.1v-30.4C177.8,326.9,174.2,323.3,169.7,323.3z
                                M360.2,246.3c4.5,0,8.1-3.6,8.1-8.1v-30.4c0-4.5-3.6-8.1-8.1-8.1h-30.4c-4.5,0-8.1,3.6-8.1,8.1v30.4c0,4.5,3.6,8.1,8.1,8.1H360.2    
                              z M47.7,435.9h230.7c-3.7-11.6-5.8-24-5.9-36.8H47.7c-6,0-10.8-4.9-10.8-10.8V171h361.7v101.1c12.8,0.1,25.2,2,36.8,5.7V94.9 
                              c0-26.3-21.4-47.7-47.7-47.7h-53.4V17.8c0-9.6-7.8-17.4-17.4-17.4h-27.1c-9.6,0-17.4,7.8-17.4,17.4v29.5H163V17.8    
                              c0-9.6-7.8-17.4-17.4-17.4h-27.1c-9.6,0-17.4,7.8-17.4,17.4v29.5H47.7C21.4,47.3,0,68.7,0,95v293.3C0,414.5,21.4,435.9,47.7,435.9    
                              z M489.2,397.7c0,50.3-40.8,91.1-91.1,91.1S307,448,307,397.7s40.8-91.1,91.1-91.1S489.2,347.4,489.2,397.7z M444.1,374.1    
                              c0-2.9-1.1-5.7-3.2-7.7c-4.3-4.3-11.2-4.3-15.5,0L385.8,406l-15.2-15.2c-4.3-4.3-11.2-4.3-15.5,0c-2.1,2.1-3.2,4.8-3.2,7.7    
                              c0,2.9,1.1,5.7,3.2,7.7l22.9,22.9c4.3,4.3,11.2,4.3,15.5,0l47.3-47.3C443,379.8,444.1,377,444.1,374.1z"/>
                          </g>
                        </svg>
                        <span class="ml-2 text-sm tracking-wide truncate">Réalisées</span>
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <!-- /Partie Pet-Sitter -->

            <!-- Partie Favoris-->
            <li>
              <button wire:click="goToPageFav" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-2">
                  <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                  <svg class="w-7 h-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 502 502" style="enable-background:new 0 0 502 502;" xml:space="preserve" width="512" height="512">
                    <g>
                      <g>
                        <path style="fill:#FF1D25;" d="M370.994,49.998c-61.509,0-112.296,45.894-119.994,105.306    c-7.698-59.412-58.485-105.306-119.994-105.306C64.176,49.998,10,104.174,10,171.004s80.283,135.528,116.45,166.574    C160.239,366.582,251,452.002,251,452.002s90.761-85.42,124.55-114.424C411.717,306.532,492,237.834,492,171.004    S437.824,49.998,370.994,49.998z"/>
                        <path d="M251,462.002c-2.464,0-4.928-0.906-6.854-2.718c-0.906-0.853-90.981-85.595-124.21-114.119l-0.348-0.299    C80.771,311.548,0,242.216,0,171.004C0,98.767,58.769,39.998,131.006,39.998c52.959,0,99.547,31.914,119.994,78.382    c20.446-46.468,67.035-78.382,119.994-78.382C443.231,39.998,502,98.767,502,171.004c0,71.211-80.771,140.543-119.588,173.862    l-0.348,0.299c-33.231,28.525-123.304,113.266-124.21,114.119C255.928,461.096,253.464,462.002,251,462.002z M131.006,59.998    C69.797,59.998,20,109.795,20,171.004c0,62.021,78.917,129.761,112.615,158.687l0.348,0.299    c28.14,24.155,96.205,87.815,118.037,108.294c21.832-20.479,89.897-84.139,118.037-108.294l0.348-0.299    C403.083,300.765,482,233.025,482,171.004c0-61.209-49.797-111.006-111.006-111.006c-55.619,0-102.941,41.525-110.077,96.591    c-0.646,4.984-4.891,8.715-9.917,8.715s-9.271-3.73-9.917-8.715C233.948,101.523,186.625,59.998,131.006,59.998z"/>
                      </g>
                      <g>
                        <path d="M252.008,412.021c-2.445,0-4.895-0.891-6.823-2.691c-26.934-25.15-75.469-70.218-97.909-89.48l-0.304-0.261    c-3.771-3.237-8.046-6.907-12.652-10.936c-4.157-3.636-4.58-9.954-0.943-14.11c3.635-4.158,9.953-4.58,14.11-0.943    c4.536,3.967,8.773,7.604,12.512,10.813l0.304,0.261c21.578,18.523,65.492,59.187,98.532,90.038    c4.037,3.77,4.253,10.097,0.484,14.134C257.35,410.955,254.682,412.021,252.008,412.021z"/>
                      </g>
                      <g>
                        <path d="M113.283,285.803c-2.51,0-5.021-0.938-6.964-2.825c-6.611-6.417-12.866-12.804-18.592-18.982    c-3.754-4.05-3.514-10.377,0.537-14.132c4.05-3.754,10.377-3.514,14.132,0.537c5.488,5.921,11.495,12.053,17.854,18.227    c3.963,3.847,4.057,10.178,0.21,14.141C118.498,284.788,115.892,285.803,113.283,285.803z"/>
                      </g>
                    </g>
                  </svg>                
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Mes favoris</span>
                <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">{{ auth()->user()->fav->count() }}</span>
              </button>
            </li>
            <!-- /Partie Favoris-->

            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center mt-5 h-8">
                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
              </div>
            </li>
            <li>
              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
              </a>
            </li>
            <li>
              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
              </a>
            </li>
          </ul>
          <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
        </div>
</div>
<!-- ./Sidebar -->

<div class="h-full ml-14 mt-14 mb-10 md:ml-64">
    <div class='bg-white overflow-hidden shadow-xl sm:rounded-lg'>
    
      @if($currentPage === 1)
        <div class="mt-2">            
        <!-- Page de mes annonces --> 
          <a href="{{ route('annonces.create') }}" class="mb-3 ml-5 text-blue-600">
              Ajouter une nouvelle annonce 
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2563EB" class="inline w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
          </a>      
          @forelse($ads as $annonce)
              <div class="px-3 py-5 mb-3 mr-4 md:mr-32 ml-5 mt-4 shadow-sm hover:shadow-md rounded border border-gray-200">    
                  <div class="flex justify-between">
                      <h2 class="text-md font-bold text-gray-600 mb-2">{{$annonce->name}}</h2>
                                      
                          <div class="flex md:justify-end mb-3 pr-10">
                              <a class="text-sm pr-10 items-center" href="{{ route('annonces.edit', $annonce) }}">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-5 h-5 inline">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                  </svg>
                                  <p class="inline text-green-700">Modifier mon annonce</p>
                              </a> 
                              <button wire:click.prevent="deleteConfirmation( {{ $annonce->id }} )" type="button" class="text-sm pr-10 items-center text-red-600">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-5 h-5 inline-block">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                                  Supprimer mon annonce
                              </button>
                          </div>
                  </div>

                  @if($annonce->start_watch && $annonce->end_watch !== null)
                      <div class="flex">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-4 h-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                          </svg>
                          <p class="text-sm text-gray-600 pb-3 pl-1">
                              Disponible du : <span class="text-md text-gray-800">{{date('d/m/Y', strtotime($annonce->start_watch))}}</span>  
                              au : <span class="text-md text-gray-800">{{date('d/m/Y', strtotime($annonce->end_watch))}}</span>
                          </p>
                      </div>
                  @endif
                  <!-- Ville -->
                  @if($annonce->ville_id !== null)
                      <div class="flex">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="blue" class="w-4 h-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                          </svg>
                          <p class="text-sm text-gray-600 pl-1 pb-3"><span class="text-md text-gray-800"> Ville : {{ $annonce->ville->ville_nom }}</span></p>    
                      </div>
                  @endif
                  <!--Fin ville -->
                  @if($annonce->garde !== null)        
                    <p class="text-sm text-gray-600 pb-2">Type de garde : <span class="text-sm text-gray-800">
                        {{ $annonce->garde->garde }}</span>  
                    </p>
                  @endif          
                  <p class="text-sm text-gray-600">Animaux gardés :  </p>
                  <ul class="text-sm text-gray-800 pb-2">
                      <li class="pb-1">{{ $annonce->chats ? 'Chats' : ''}}</li>
                      <li class="pb-1">{{ $annonce->chiens ? ' Chiens' : ''}} </li>
                      <li class="pb-1">{{ $annonce->poissons ? ' Poissons' : ''}}</li>
                      <li class="pb-1">{{ $annonce->rongeurs ? ' Rongeurs' : ''}}</li>
                      <li class="pb-1">{{ $annonce->oiseaux ? ' Oiseaux' : ''}}</li>                                <li class="pb-1">{{ $annonce->reptiles ? ' Reptiles' : ''}}</li>                                    <li class="pb-1">{{ $annonce->ferme ? ' Animaux de la ferme' : ''}}</li>
                  </ul>    
                  <p class="text-sm text-gray-600 pb-2">Prix : <span class="text-sm text-gray-800">{{ $annonce->getPrice() }} /jour.</span></p>     
                  <div class="flex justify-between">

                      <div class="flex items-center">
                          <span class="h-2 w-2 bg-green-600 rounded-full mr-1"></span>
                          <a class="text-sm" href="{{ route('annonces.show', $annonce) }}">Voir mon annonce</a>
                      </div>

                      <div class=" my-4">
                          <p class="text-sm text-black mr-12 pr-5">Demandes de garde reçues ({{ $annonce->proposals->count() }})</p>
                          @if($annonce->proposals->count() > 0)
                          <a class="text-sm text-green-700" href="{{ route('proposals.index') }}">Voir les demandes</a>
                          @endif
                      </div>
                  </div>
                                                                          
              </div>                          
          @empty
              <div class="px-3 py-5 mb-3 mr-4 md:mr-32 lg:mr-32 ml-5">
                  <div class="flex justify-between pb-2">
                      <p class="text-md font-normal text-gray-800">Vous n'avez aucune annonce active pour l'instant. Vous pouvez en poster une en cliquant <a class="text-blue-600" href="{{ route('annonces.create') }}">ici.</a></p>
                  </div>
              </div>          
          @endforelse
        </div> 
      @endif

      @if($currentPage === 2)
        <div class="mt-2">
          <a href="{{ route('animals.create') }}" class="mb-3 ml-5 text-blue-600 text-blue-600">
            Ajouter une nouvelle fiche animal
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2563EB" class="inline w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </a>
          @forelse($animals as $animal)
              <div class="px-3 py-5 mb-3 mt-4 mr-4 md:mr-32 ml-5 shadow-sm hover:shadow-md rounded border border-gray-200">    
                  <div class="flex justify-between">
                      <h2 class="text-md font-bold text-gray-600 mb-2">{{$animal->animal_name}}</h2>
                                        
                      <div class="flex md:justify-end mb-3 pr-10">
                          <a class="text-sm pr-10 items-center" href="{{ route('animals.edit', $animal) }}">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-5 h-5 inline">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                              </svg>
                              <p class="inline text-green-700">Modifier la fiche de {{$animal->animal_name}}</p>
                          </a>
                                       
                          <button wire:click="deleteConfirmationAnimal( {{ $animal->id }} )" type="button" class="text-sm pr-10 items-center text-red-600">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-5 h-5 inline-block">
                                   <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                              Supprimer la fiche
                          </button>          
                      </div>
                  </div>
                  <div class="flex items-center">
                      <span class="h-2 w-2 bg-green-600 rounded-full mr-1"></span>
                      <a class="text-sm" href="{{ route('animals.show', $animal) }}">Voir la fiche {{ $animal->animal_name }}</a>
                  </div>    
              </div>
          @empty
              <div class="px-3 py-5 mb-3 mr-4 md:mr-32 lg:mr-32 ml-5">
                  <div class="flex justify-between pb-2">
                      <p class="text-md font-normal text-gray-800">Vous n'avez aucune fiche pour vos animaux pour l'instant. Vous pouvez en créer une en cliquant <a class="text-blue-600" href="{{ route('animals.create') }}">ici.</a></p>
                  </div>
              </div>
          @endforelse
        </div>
      @endif

      @if($currentPage === 3)
        <div class="mt-2">
          @livewire('dashboard-garde-sent')
        </div>
      @endif

      @if($currentPage === 4)
        <div class="mt-2">
          @livewire('dashboard-garde-sent-wait')
        </div>
      @endif

      @if($currentPage === 5)
        <div class="mt-2">
          @livewire('dashboard-garde-sent-accepted')
        </div>
      @endif

      @if($currentPage === 6)
        <div class="mt-2">
          @livewire('dashboard-garde-sent-declined')
        </div>
      @endif

      @if($currentPage === 8)
        <div class="mt-2">
          @livewire('dashboard-garde-received-wait')
        </div>
      @endif

      @if($currentPage === 9)
        <div class="mt-2">
          @livewire('dashboard-garde-accept')
        </div>
      @endif

      @if($currentPage === 10)
        <div class="mt-2">
          @livewire('dashboard-garde-received-declined')
        </div>
      @endif

      @if($currentPage === 12)
        <div class="mt-2">
          @livewire('dashboard-fav')
        </div>
      @endif

    </div>
</div>

</div>