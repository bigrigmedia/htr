<section class='py-12 px-5 lg:pl-28 lg:pr-52 xl:px-52'>
  <div class='text-center space-y-8'>
    @while(have_posts()) @php(the_post())
      @includeFirst(['partials.content-page', 'partials.content'])
    @endwhile
  </div>
</section>
