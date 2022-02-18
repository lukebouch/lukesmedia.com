<form name="contact" action="/contact-confirmation" @if($page->production)
    method="POST"
    @endif
    data-netlify-recaptcha="true"
    netlify>
    <div class="md:grid md:grid-cols-2 gap-2">
        <div class="grid">
            <label>Name</label>
            <input class="rounded-md shadow" type="text" name="name" />
        </div>
        <div class="grid">
            <label>Email</label>
            <input class="rounded-md shadow" type="email" name="email" />
        </div>
        <div class="col-span-2 grid pb-2">
            <label>Email</label>
            <textarea class="h-48 rounded-md shadow resize-none" type="email" name="email"></textarea>
        </div>
    </div>

    <div class="mt-2">
        <x-button type="submit">Send</x-button>
    </div>
    <div data-netlify-recaptcha="true"></div>
</form>