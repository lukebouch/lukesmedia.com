@extends('_layouts.main')

@section('body')
<section class="flex flex-col h-screen p-10 -mt-20 justify-center items-center text-center text-white bg-cover"
    style="background-image: linear-gradient(111.06deg, rgba(0, 81, 224, 0.75) 0%, rgba(26, 71, 151, 0.75) 100%), url('/assets/images/20220127-WintergreenSunset-02.jpg')">
    <h1>Exceptional Websites<br>
        <div class="text-lg font-normal">designed from the ground up to grow your
            business.</div>
    </h1>
</section>
<section class="py-5 mt-10">
    <div class="container text-center">
        <h2><img class="mx-auto w-10 mb-2" src="/assets/images/top-secret.png" alt="Lock">
            Top-Notch Security</h2>
        <p>Having your website hacked can not only be an expensive and time-consuming experience, but it can also be a
            detriment to
            your business by losing your customers trust. I take security very seriously by building on top of two of
            the
            most
            trusted and secure companies (Netlify and Digital Ocean).</p>
    </div>
</section>
<section class="py-5">
    <div class="container text-center">
        <h2><img class="mx-auto w-10 mb-2" src="/assets/images/medal.png" alt="Medal">
            Superior Quality</h2>
        <p>Grow your business and blow away the competition with a highly custom, professionally designed website, built
            from the
            ground up to drive customers and build your brand. You will not get a generic site built from a cheap
            template but a
            highly refined and polished design, tailored specifically for your brand.</p>
    </div>
</section>
<section class="py-5 mb-10">
    <div class="container text-center">
        <h2><img class="mx-auto w-10 mb-2" src="/assets/images/100-percent.png" alt="Medal">
            Outstanding Reliability</h2>
        <p>I keep your website running smoothly and monitor it 24/7. Without you even needing to lift a finger.</p>
    </div>
</section>
<section class="md:pt-10 pb-10">
    <div class="container flex flex-wrap gap-5 justify-center">
        <div class="flex-auto max-w-xl inline-block">
            <h2>Schedule a Meeting</h2>
            <p>Ready to hire me to build out your website?<br>
                Let's schedule a time to talk.</p>
            <div class="grid md:grid-cols-2 max-w-sm pt-1">
                <x-anchor href="https://calendly.com/lukes-media/meeting">Schedule a Time</x-anchor>
            </div>

            <div class="my-8 border-b-2 text-xl text-center font-medium"><span
                    class="relative top-5 px-4 mb-4 bg-white">or</span>
            </div>

            <div class="pt-4">
                <h2 class="mt-0">Contact</h2>
                <x-contact-form />
            </div>
        </div>
        <img class="flex-auto w-full h-full max-w-md" src="/assets/images/LukeBouch02.png" alt="Luke Bouch">
    </div>
</section>
@endsection