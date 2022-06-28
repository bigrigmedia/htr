<section class='px-5 lg:pr-20 xl:pl-12 xl:pr-32 pb-12 xl:pb-52'>
  <x-rule type='2' heading='{{ $rule }}' subheading='' />
  <div class='lg:flex lg:items-center lg:justify-between pb-8 lg:pb-16'>
    {!! $heading !!}
    <a class='btn-icon !hidden lg:!flex' href='{{ $url }}'>
      <svg class='btn-svg' fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 97 97'>
        <path class='btn-svg-outer' d='M.707 48.027 48.027.707l47.32 47.32-47.32 47.32z' />
        <path class='btn-svg-inner' d='M66.06 49.06a1.5 1.5 0 0 0 0-2.12l-9.545-9.547a1.5 1.5 0 1 0-2.122 2.122L62.88 48l-8.486 8.485a1.5 1.5 0 1 0 2.122 2.122l9.546-9.546ZM29 49.5h36v-3H29v3Z' />
      </svg>
      {{ $text }}
    </a>
  </div>
  <div class='lg:grid lg:grid-cols-12 lg:gap-14'>
    <div class='lg:col-span-8 mb-10 lg:mb-0'>
      <img
        srcset='{{ $image['sizes']['w698x776'] }} 698w, {{ $image['sizes']['w1013x668'] }} 1013w'
        sizes='(max-width: 375px) 698px, (min-width: 812px) 1013px, 698px'
        src='{{ $image['sizes']['w1013x668'] }}'
        alt='{{ $image['alt'] }}'
        loading='lazy'
      />
    </div>
    <div class='lg:col-span-4 lg:flex lg:flex-col lg:self-end space-y-6'>
      <div class='intro-with-text-content'>
        {!! $content !!}
      </div>
      <a class='btn-icon lg:!hidden' href='{{ $url }}'>
      <svg class='btn-svg' fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 97 97'>
        <path class='btn-svg-outer' d='M.707 48.027 48.027.707l47.32 47.32-47.32 47.32z' />
        <path class='btn-svg-inner' d='M66.06 49.06a1.5 1.5 0 0 0 0-2.12l-9.545-9.547a1.5 1.5 0 1 0-2.122 2.122L62.88 48l-8.486 8.485a1.5 1.5 0 1 0 2.122 2.122l9.546-9.546ZM29 49.5h36v-3H29v3Z' />
      </svg>
      {{ $text }}
    </a>
    </div>
  </div>
</section>
