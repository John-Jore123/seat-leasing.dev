<form action="#" method="POST" class="inline-flex flex-wrap justify-center mx-20 sm:mx-4 md:mb-10">
    @csrf
    <x-form.input type="text" placeholder="Your Name" name="name"></x-form.input>
    <x-form.input type="email" placeholder="Your Email" name="name"></x-form.input>
    <x-form.textarea placeholder="Your Message" rows="5"></x-form.textarea>
    <x-form.button type="submit" name="contactBtn"> send message </x-form.button>
</form>