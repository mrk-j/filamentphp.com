<div
    x-cloak
    x-data="{}"
    class="mx-auto w-full max-w-screen-lg px-10 pt-20 lg:px-5"
>
    <div class="">
        <div class="flex justify-end">
            {{-- Decoration Arrow --}}
            <img
                src="{{ Vite::asset('resources/svg/home/decoration-down-arrow-peach.svg') }}"
                alt=""
                class="w-24"
            />
        </div>
        <div class="relative mx-auto w-[95%]">
            <div
                class="rounded-[2.5rem] bg-gradient-to-tr from-[#24263A] to-[#2E2F47] p-14 text-white"
            >
                {{-- Header --}}
                <div class="flex items-center justify-center gap-7">
                    <div class="relative">
                        {{-- Lighting Bolt --}}
                        <img
                            src="{{ Vite::asset('resources/images/home/lightingbolt.webp') }}"
                            alt=""
                            class="w-5"
                        />
                        {{-- Blur Background --}}
                        <div
                            class="absolute right-1/2 top-1/2 h-5 w-5 -translate-y-1/2 translate-x-1/2 rounded-full bg-yellow-400 blur-lg"
                        ></div>
                    </div>
                    {{-- Batteries Included --}}
                    <div class="text-3xl">
                        <span class="font-bold">Batteries</span>
                        <span class="">Included</span>
                    </div>
                </div>
                <div
                    class="grid grid-cols-2 gap-x-12 gap-y-10 px-16 pb-7 pt-16"
                >
                    <a
                        href="#"
                        class="group/package-link flex items-center gap-5 transition duration-300 will-change-transform hover:translate-x-1"
                    >
                        <div
                            class="grid h-[3.25rem] w-[3.25rem] shrink-0 place-items-center rounded-xl bg-[#464762]"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="40"
                                height="40"
                                viewBox="0 0 21 21"
                            >
                                <path
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m17.498 15.498l-.01-10a2 2 0 0 0-2-1.998h-10a2 2 0 0 0-1.995 1.85l-.006.152l.01 10a2 2 0 0 0 2 1.998h10a2 2 0 0 0 1.995-1.85zM7.5 7.5v9.817m10-9.817h-14"
                                />
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <div class="text-base font-medium">
                                    Panel Builder
                                </div>
                                <div
                                    class="-translate-x-1 scale-x-90 text-butter opacity-0 transition duration-300 group-hover/package-link:translate-x-0 group-hover/package-link:scale-x-100 group-hover/package-link:opacity-100"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        height="22"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 12h16m0 0l-6-6m6 6l-6 6"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="max-w-xs text-sm text-rum">
                                Fully featured, simply intuitive and insanely
                                attractive.
                            </div>
                        </div>
                    </a>
                    <a
                        href="#"
                        class="group/package-link flex items-center gap-5 transition duration-300 will-change-transform hover:translate-x-1"
                    >
                        <div
                            class="grid h-[3.25rem] w-[3.25rem] shrink-0 place-items-center rounded-xl bg-[#464762]"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="37"
                                height="37"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    fill="currentColor"
                                    d="M18.44 3.06H5.56a2.507 2.507 0 0 0-2.5 2.5v12.88a2.507 2.507 0 0 0 2.5 2.5h12.88a2.514 2.514 0 0 0 2.5-2.5V5.56a2.514 2.514 0 0 0-2.5-2.5ZM8.71 19.94H5.56a1.5 1.5 0 0 1-1.5-1.5v-3.11h4.65Zm0-5.61H4.06V9.67h4.65Zm0-5.66H4.06V5.56a1.5 1.5 0 0 1 1.5-1.5h3.15Zm11.23 9.77a1.511 1.511 0 0 1-1.5 1.5H9.71v-4.61h10.23Zm0-4.11H9.71V9.67h10.23Zm0-5.66H9.71V4.06h8.73a1.511 1.511 0 0 1 1.5 1.5Z"
                                />
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <div class="text-base font-medium">
                                    Table Builder
                                </div>
                                <div
                                    class="-translate-x-1 scale-x-90 text-butter opacity-0 transition duration-300 group-hover/package-link:translate-x-0 group-hover/package-link:scale-x-100 group-hover/package-link:opacity-100"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        height="22"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 12h16m0 0l-6-6m6 6l-6 6"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="max-w-xs text-sm text-rum">
                                Craft beautiful, optimized, and interactive
                                datatables for any situation.
                            </div>
                        </div>
                    </a>
                    <a
                        href="#"
                        class="group/package-link flex items-center gap-5 transition duration-300 will-change-transform hover:translate-x-1"
                    >
                        <div
                            class="grid h-[3.25rem] w-[3.25rem] shrink-0 place-items-center rounded-xl bg-[#464762]"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="37"
                                height="37"
                                viewBox="0 0 48 48"
                            >
                                <path
                                    fill="currentColor"
                                    d="M21 21.5a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0Zm-2.5 0a2 2 0 1 0-4 0a2 2 0 0 0 4 0Zm-2 15.5a4.5 4.5 0 1 0 0-9a4.5 4.5 0 0 0 0 9Zm0-2.5a2 2 0 1 1 0-4a2 2 0 0 1 0 4ZM13.25 12a1.25 1.25 0 1 0 0 2.5h21.5a1.25 1.25 0 1 0 0-2.5h-21.5ZM23 21.75c0-.69.56-1.25 1.25-1.25h10.5a1.25 1.25 0 1 1 0 2.5h-10.5c-.69 0-1.25-.56-1.25-1.25ZM24.25 31a1.25 1.25 0 1 0 0 2.5h10.5a1.25 1.25 0 1 0 0-2.5h-10.5Zm-12-25A6.25 6.25 0 0 0 6 12.25v23.5A6.25 6.25 0 0 0 12.25 42h23.5A6.25 6.25 0 0 0 42 35.75v-23.5A6.25 6.25 0 0 0 35.75 6h-23.5ZM8.5 12.25a3.75 3.75 0 0 1 3.75-3.75h23.5a3.75 3.75 0 0 1 3.75 3.75v23.5a3.75 3.75 0 0 1-3.75 3.75h-23.5a3.75 3.75 0 0 1-3.75-3.75v-23.5Z"
                                />
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <div class="text-base font-medium">
                                    Form Builder
                                </div>
                                <div
                                    class="-translate-x-1 scale-x-90 text-butter opacity-0 transition duration-300 group-hover/package-link:translate-x-0 group-hover/package-link:scale-x-100 group-hover/package-link:opacity-100"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        height="22"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 12h16m0 0l-6-6m6 6l-6 6"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="max-w-xs text-sm text-rum">
                                Easily build stunning forms with over 25
                                components out of the box.
                            </div>
                        </div>
                    </a>
                    <a
                        href="#"
                        class="group/package-link flex items-center gap-5 transition duration-300 will-change-transform hover:translate-x-1"
                    >
                        <div
                            class="grid h-[3.25rem] w-[3.25rem] shrink-0 place-items-center rounded-xl bg-[#464762]"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="31"
                                height="31"
                                viewBox="0 0 24 24"
                            >
                                <g
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                >
                                    <path
                                        d="M18.75 9.71v-.705C18.75 5.136 15.726 2 12 2S5.25 5.136 5.25 9.005v.705a4.4 4.4 0 0 1-.692 2.375L3.45 13.81c-1.011 1.575-.239 3.716 1.52 4.214a25.775 25.775 0 0 0 14.06 0c1.759-.498 2.531-2.639 1.52-4.213l-1.108-1.725a4.4 4.4 0 0 1-.693-2.375Z"
                                    />
                                    <path
                                        stroke-linecap="round"
                                        d="M7.5 19c.655 1.748 2.422 3 4.5 3s3.845-1.252 4.5-3"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <div class="text-base font-medium">
                                    Notifications
                                </div>
                                <div
                                    class="-translate-x-1 scale-x-90 text-butter opacity-0 transition duration-300 group-hover/package-link:translate-x-0 group-hover/package-link:scale-x-100 group-hover/package-link:opacity-100"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        height="22"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 12h16m0 0l-6-6m6 6l-6 6"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="max-w-xs text-sm text-rum">
                                Effortless solution to send notifications.
                            </div>
                        </div>
                    </a>
                    <a
                        href="#"
                        class="group/package-link flex items-center gap-5 transition duration-300 will-change-transform hover:translate-x-1"
                    >
                        <div
                            class="grid h-[3.25rem] w-[3.25rem] shrink-0 place-items-center rounded-xl bg-[#464762]"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="m16.574 19.2l-3.938-3.938l-1.203 1.202c-1.23 1.232-1.846 1.847-2.508 1.702c-.662-.146-.963-.963-1.565-2.596l-2.007-5.45C4.152 6.861 3.55 5.231 4.39 4.391c.84-.84 2.47-.24 5.73.962l5.45 2.007c1.633.602 2.45.903 2.596 1.565c.145.662-.47 1.277-1.702 2.508l-1.202 1.203l3.938 3.938c.408.408.612.612.706.84c.125.303.125.643 0 .947c-.094.227-.298.431-.706.839s-.612.612-.84.706a1.238 1.238 0 0 1-.947 0c-.227-.094-.43-.298-.839-.706Z"
                                />
                            </svg>
                        </div>
                        <div class="space-y-0.5">
                            <div class="flex items-center gap-2">
                                <div class="text-base font-medium">Actions</div>
                                <div
                                    class="rounded-full bg-[#C8A3F7] px-3 py-0.5 text-xs font-medium text-black"
                                >
                                    New
                                </div>
                                <div
                                    class="-translate-x-1 scale-x-90 text-butter opacity-0 transition duration-300 group-hover/package-link:translate-x-0 group-hover/package-link:scale-x-100 group-hover/package-link:opacity-100"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        height="22"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 12h16m0 0l-6-6m6 6l-6 6"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="max-w-xs text-sm text-rum">
                                Open modals and slide-overs from any button.
                            </div>
                        </div>
                    </a>
                    <a
                        href="#"
                        class="group/package-link flex items-center gap-5 transition duration-300 will-change-transform hover:translate-x-1"
                    >
                        <div
                            class="grid h-[3.25rem] w-[3.25rem] shrink-0 place-items-center rounded-xl bg-[#464762]"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="34"
                                height="34"
                                viewBox="0 0 24 24"
                            >
                                <g
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                >
                                    <path
                                        d="M16 4.002c2.175.012 3.353.109 4.121.877C21 5.758 21 7.172 21 10v6c0 2.829 0 4.243-.879 5.122C19.243 22 17.828 22 15 22H9c-2.828 0-4.243 0-5.121-.878C3 20.242 3 18.829 3 16v-6c0-2.828 0-4.242.879-5.121c.768-.768 1.946-.865 4.121-.877"
                                    />
                                    <path
                                        stroke-linecap="round"
                                        d="M10.5 14H17M7 14h.5M7 10.5h.5m-.5 7h.5m3-7H17m-6.5 7H17"
                                    />
                                    <path
                                        d="M8 3.5A1.5 1.5 0 0 1 9.5 2h5A1.5 1.5 0 0 1 16 3.5v1A1.5 1.5 0 0 1 14.5 6h-5A1.5 1.5 0 0 1 8 4.5v-1Z"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="space-y-0.5">
                            <div class="flex items-center gap-2">
                                <div class="text-base font-medium">
                                    Info Lists
                                </div>
                                <div
                                    class="rounded-full bg-[#C8A3F7] px-3 py-0.5 text-xs font-medium text-black"
                                >
                                    New
                                </div>
                                <div
                                    class="-translate-x-1 scale-x-90 text-butter opacity-0 transition duration-300 group-hover/package-link:translate-x-0 group-hover/package-link:scale-x-100 group-hover/package-link:opacity-100"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        height="22"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 12h16m0 0l-6-6m6 6l-6 6"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="max-w-xs text-sm text-rum">
                                Summarize your data into beautiful lists and
                                report cards.
                            </div>
                        </div>
                    </a>
                    <a
                        href="#"
                        class="group/package-link flex items-center gap-5 transition duration-300 will-change-transform hover:translate-x-1"
                    >
                        <div
                            class="grid h-[3.25rem] w-[3.25rem] shrink-0 place-items-center rounded-xl bg-[#464762]"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                viewBox="0 0 24 24"
                            >
                                <g
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                >
                                    <path
                                        stroke-linecap="round"
                                        d="M14.5 6.5h3m0 0h3m-3 0v3m0-3v-3"
                                    />
                                    <path
                                        d="M2.5 6.5c0-1.886 0-2.828.586-3.414C3.672 2.5 4.614 2.5 6.5 2.5c1.886 0 2.828 0 3.414.586c.586.586.586 1.528.586 3.414c0 1.886 0 2.828-.586 3.414c-.586.586-1.528.586-3.414.586c-1.886 0-2.828 0-3.414-.586C2.5 9.328 2.5 8.386 2.5 6.5Zm11 11c0-1.886 0-2.828.586-3.414c.586-.586 1.528-.586 3.414-.586c1.886 0 2.828 0 3.414.586c.586.586.586 1.528.586 3.414c0 1.886 0 2.828-.586 3.414c-.586.586-1.528.586-3.414.586c-1.886 0-2.828 0-3.414-.586c-.586-.586-.586-1.528-.586-3.414Zm-11 0c0-1.886 0-2.828.586-3.414c.586-.586 1.528-.586 3.414-.586c1.886 0 2.828 0 3.414.586c.586.586.586 1.528.586 3.414c0 1.886 0 2.828-.586 3.414c-.586.586-1.528.586-3.414.586c-1.886 0-2.828 0-3.414-.586C2.5 20.328 2.5 19.386 2.5 17.5Z"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="space-y-0.5">
                            <div class="flex items-center gap-2">
                                <div class="text-base font-medium">Widgets</div>
                                <div
                                    class="rounded-full bg-[#C8A3F7] px-3 py-0.5 text-xs font-medium text-black"
                                >
                                    New
                                </div>
                                <div
                                    class="-translate-x-1 scale-x-90 text-butter opacity-0 transition duration-300 group-hover/package-link:translate-x-0 group-hover/package-link:scale-x-100 group-hover/package-link:opacity-100"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        height="22"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 12h16m0 0l-6-6m6 6l-6 6"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="max-w-xs text-sm text-rum">
                                Powerful cards in your pages with a dozen of
                                ready-to-use templates.
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Decoration Background --}}
            <div
                class="absolute -left-2.5 top-2.5 -z-10 h-full w-full rotate-1 rounded-[2.5rem] bg-butter"
            ></div>
        </div>
        <div class="flex justify-start">
            {{-- Decoration Lines --}}
            <img
                src="{{ Vite::asset('resources/svg/home/decoration-three-lines.svg') }}"
                alt=""
                class="relative -left-5 -top-2 w-14"
            />
        </div>
    </div>
</div>
