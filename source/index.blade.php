@extends('_layouts.main')

@section('body')
<section class="flex flex-col h-screen p-10 -mt-20 justify-center items-center text-center text-white bg-cover"
    style="background-image: linear-gradient(111.06deg, rgba(0, 81, 224, 0.75) 0%, rgba(26, 71, 151, 0.75) 100%), url('/assets/images/20220127-WintergreenSunset-02.jpg')">
    <h1>Grow Your Business<br>
        <div class="text-lg font-normal">with a website designed specificly to drive customers.</div>
    </h1>
    <x-anchor href="#schedule" :style="3">Schedule a Meeting</x-anchor>
</section>
<section class="py-14 md:py-28 my-10">
    <div class="container">
        <ul class="list-disc-lg space-y-10 md:space-y-14">
            <li class="flex">
                <x-icons.bullet class="hidden md:inline-block mt-6 mr-7" />
                <div>
                    <h2 class="m-0">Build Trust with Customers</h2>
                    <p>Clean and professional website = customer trust</p>
                </div>
            </li>
            <li class="flex">
                <x-icons.bullet class="hidden md:inline-block mt-6 mr-7" />
                <div>
                    <h2 class="m-0">Increase Profit</h2>
                    <p>More customers = higher profit</p>
                </div>
            </li>
            <li class="flex">
                <x-icons.bullet class="hidden md:inline-block mt-6 mr-7" />
                <div>
                    <h2 class="m-0">Dominate Your Market</h2>
                    <p>Steal customers from your competitors with a website that will impress and drive conversions.</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="py-10 my-10 text-white bg-blue">
    <div class="py-5">
        <div class="container text-center">
            <h2><img class="mx-auto w-10 mb-2" src="/assets/images/top-secret.png" alt="Lock">
                Top-Notch Security</h2>
            <p>Having your website hacked can not only be an expensive and time-consuming experience, but it can also be
                a
                detriment to
                your business by losing your customers trust. I take security very seriously by building on top of two
                of
                the
                most
                trusted and secure companies (Netlify and Digital Ocean).</p>
        </div>
    </div>
    <div class="py-5">
        <div class="container text-center">
            <h2><img class="mx-auto w-10 mb-2" src="/assets/images/medal.png" alt="Medal">
                Superior Quality</h2>
            <p>Grow your business and blow away the competition with a highly custom, professionally designed website,
                built
                from the
                ground up to drive customers and build your brand. You will not get a generic site built from a cheap
                template but a
                highly refined and polished design, tailored specifically for your brand.</p>
        </div>
    </div>
    <div class="py-5">
        <div class="container text-center">
            <h2><img class="mx-auto w-10 mb-2" src="/assets/images/100-percent.png" alt="Medal">
                Outstanding Reliability</h2>
            <p>I keep your website running smoothly and monitor it 24/7. Without you even needing to lift a finger.</p>
        </div>
    </div>
</section>
<section class="md:pt-10 pb-10" id="schedule">
    <div class="container">
        <div class="text-center">
            <h2>Schedule a Meeting</h2>
            <p>Ready to hire me to build out your website?<br>
                Let's schedule a time to talk.</p>
        </div>
        <x-calendly></x-calendly>
    </div>
</section>
@endsection