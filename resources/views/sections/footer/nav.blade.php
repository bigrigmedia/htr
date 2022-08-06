@php
  $phone = get_field('global_phone', 'option');
  $email = get_field('global_email', 'option');
  $address = get_field('global_address', 'option');
  $facebook = get_field('global_facebook', 'option');
  $instagram = get_field('global_instagram', 'option');
@endphp
<div class='order-2 lg:order-4 col-span-6 lg:col-span-9 -mb-[100px] lg:mb-0 px-5 xl:px-32 lg:py-14 text-white'>
  <div class='grid lg:grid-cols-4 gap-8 py-14 lg:py-0'>
    <div class='order-2 lg:order-1'>
      <p class='mb-6 text-sm lg:text-md font-poppins font-bold text-htr-canvas uppercase tracking-widest'>Destinations</p>
      <ul class='my-0 pl-0 list-none space-y-2'>
        @foreach($getDestinations as $destination)
          <li class='font-poppins'>
            <a class='text-sm lg:text-md font-normal text-htr-canvas uppercase tracking-widest no-underline hover:text-htr-flame' href='{{ get_permalink($destination->ID) }}'>{{ $destination->post_title }}</a>
          </li>
        @endforeach
      </ul>
    </div>
    <div class='order-3 lg:order-2'>
      <p class='mb-6 text-sm lg:text-md font-poppins font-bold text-htr-canvas uppercase tracking-widest'>HTR Resorts</p>
      <ul class='my-0 pl-0 list-none space-y-2'>
        <li class='font-poppins'>
          <a class='text-sm lg:text-md font-normal text-htr-canvas uppercase tracking-widest no-underline hover:text-htr-flame' href='{{ get_permalink(193) }}'>About</a>
        </li>
        <li class='font-poppins'>
          <a class='text-sm lg:text-md font-normal text-htr-canvas uppercase tracking-widest no-underline hover:text-htr-flame' href='{{ get_permalink(230) }}'>Contact</a>
        </li>
      </ul>
    </div>
    <div class='order-1 lg:order-3'>
      <p class='mb-6 text-sm lg:text-md font-poppins font-bold text-htr-canvas uppercase tracking-widest'>Contact</p>
      <div class='space-y-2'>
        @if($phone)
          <span class='block'>
            <a class='text-sm lg:text-md text-htr-canvas no-underline hover:text-htr-flame' href='tel:{{ $phone }}'>{{ $phone }}</a>
          </span>
        @endif
        @if($email)
          <span class='block'>
            <a class='text-sm lg:text-md text-htr-canvas no-underline hover:text-htr-flame' href='mailto:{{ $email }}'>{{ $email }}</a>
          </span>
        @endif
        @if($address)
          <address class='not-italic'>
            <a class='text-sm lg:text-md text-htr-canvas no-underline hover:text-htr-flame' href='https://www.google.com/maps/dir/Current+Location/{{ urlencode($address) }}'>{{ $address }}</a>
          </address>
        @endif
      </div>
    </div>
    <div class='lg:order-4 hidden lg:block'>
      <p class='mb-6 text-sm lg:text-md font-poppins font-bold text-htr-canvas uppercase tracking-widest'>Socials</p>
      <div class='space-x-2'>
        @if($facebook)
          <a class='btn-social' href='{{ $facebook }}'>
            <svg viewBox='0 0 22 22' fill='none' xmlns='http://www.w3.org/2000/svg'>
              <path class='fill-htr-canvas' d='M22 11.0672C22 4.95496 17.0751 0 11 0C4.92486 0 0 4.95496 0 11.0672C0 16.5911 4.02252 21.1697 9.28125 22V14.2663H6.48828V11.0672H9.28125V8.62898C9.28125 5.85525 10.9235 4.32313 13.4361 4.32313C14.6392 4.32313 15.8984 4.53929 15.8984 4.53929V7.26287H14.5114C13.145 7.26287 12.7188 8.11604 12.7188 8.99212V11.0672H15.7695L15.2818 14.2663H12.7188V22C17.9775 21.1697 22 16.5911 22 11.0672Z' />
            </svg>
          </a>
        @endif
        @if($instagram)
          <a class='btn-social' href='{{ $instagram }}'>
            <svg viewBox='0 0 22 23' fill='none' xmlns='http://www.w3.org/2000/svg'>
              <path class='fill-htr-canvas' d='M10.7633 2.4286C13.6392 2.4286 13.9797 2.44157 15.1107 2.49342C16.1618 2.54095 16.7294 2.72245 17.1078 2.87369C17.6081 3.07246 17.9697 3.31445 18.3439 3.69904C18.7223 4.08795 18.9535 4.45525 19.1469 4.96948C19.2941 5.35839 19.4707 5.94607 19.5169 7.02205C19.5674 8.18878 19.58 8.5388 19.58 11.4902C19.58 14.4459 19.5674 14.7959 19.5169 15.9583C19.4707 17.0386 19.2941 17.622 19.1469 18.0109C18.9535 18.5251 18.7181 18.8967 18.3439 19.2813C17.9655 19.6702 17.6081 19.9079 17.1078 20.1067C16.7294 20.2579 16.1576 20.4394 15.1107 20.487C13.9755 20.5388 13.6349 20.5518 10.7633 20.5518C7.8875 20.5518 7.54694 20.5388 6.41595 20.487C5.36485 20.4394 4.79725 20.2579 4.41885 20.1067C3.91852 19.9079 3.55694 19.6659 3.18275 19.2813C2.80435 18.8924 2.57311 18.5251 2.3797 18.0109C2.23255 17.622 2.05596 17.0343 2.00971 15.9583C1.95926 14.7916 1.94665 14.4416 1.94665 11.4902C1.94665 8.53448 1.95926 8.18446 2.00971 7.02205C2.05596 5.94175 2.23255 5.35839 2.3797 4.96948C2.57311 4.45525 2.80856 4.08363 3.18275 3.69904C3.56115 3.31013 3.91852 3.07246 4.41885 2.87369C4.79725 2.72245 5.36905 2.54095 6.41595 2.49342C7.54694 2.44157 7.8875 2.4286 10.7633 2.4286ZM10.7633 0.436523C7.84125 0.436523 7.47547 0.449487 6.32766 0.501342C5.18406 0.553196 4.39783 0.74333 3.71671 1.01557C3.00616 1.30077 2.40493 1.67671 1.8079 2.29465C1.20667 2.90826 0.840885 3.52619 0.563393 4.25216C0.298514 4.95651 0.113519 5.76026 0.0630664 6.93563C0.0126133 8.11964 0 8.49559 0 11.4988C0 14.5021 0.0126133 14.878 0.0630664 16.0577C0.113519 17.2331 0.298514 18.0411 0.563393 18.7412C0.840885 19.4715 1.20667 20.0894 1.8079 20.703C2.40493 21.3166 3.00616 21.6969 3.71251 21.9778C4.39783 22.25 5.17985 22.4401 6.32345 22.492C7.47126 22.5439 7.83705 22.5568 10.7591 22.5568C13.6812 22.5568 14.047 22.5439 15.1948 22.492C16.3384 22.4401 17.1246 22.25 17.8057 21.9778C18.5121 21.6969 19.1133 21.3166 19.7103 20.703C20.3074 20.0894 20.6774 19.4715 20.9506 18.7455C21.2155 18.0412 21.4005 17.2374 21.451 16.062C21.5014 14.8823 21.514 14.5064 21.514 11.5032C21.514 8.49991 21.5014 8.12396 21.451 6.94427C21.4005 5.7689 21.2155 4.96083 20.9506 4.2608C20.6858 3.52619 20.32 2.90826 19.7188 2.29465C19.1217 1.68103 18.5205 1.30077 17.8141 1.01989C17.1288 0.747651 16.3468 0.557517 15.2032 0.505663C14.0512 0.449487 13.6854 0.436523 10.7633 0.436523Z' />
              <path class='fill-htr-canvas' d='M10.7632 5.81641C7.71078 5.81641 5.23438 8.3616 5.23438 11.4988C5.23438 14.636 7.71078 17.1812 10.7632 17.1812C13.8156 17.1812 16.292 14.636 16.292 11.4988C16.292 8.3616 13.8156 5.81641 10.7632 5.81641ZM10.7632 15.1848C8.78291 15.1848 7.17682 13.5341 7.17682 11.4988C7.17682 9.46351 8.78291 7.81281 10.7632 7.81281C12.7435 7.81281 14.3496 9.46351 14.3496 11.4988C14.3496 13.5341 12.7435 15.1848 10.7632 15.1848Z' />
              <path class='fill-htr-canvas' d='M17.8012 5.59151C17.8012 6.32611 17.221 6.91812 16.5105 6.91812C15.7957 6.91812 15.2197 6.32179 15.2197 5.59151C15.2197 4.8569 15.7999 4.26489 16.5105 4.26489C17.221 4.26489 17.8012 4.86122 17.8012 5.59151Z' />
            </svg>
          </a>
        @endif
      </div>
    </div>
  </div>
</div>
