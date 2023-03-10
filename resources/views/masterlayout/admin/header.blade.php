<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('public') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add voucher</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    {{-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-ee4ee904-4f83-4ad8-9b9d-3b00ae61810c"></div> --}}

    <!-- CKEditor -->
    {{-- <script src="//cdn.ckeditor.com/4.17.1/basic/ckeditor.js" charset="utf-8"></script> --}}
    {{-- <script src="{{ asset('ckeditor/src/ckeditor.js') }}" charset="utf-8"></script> --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/translations/vi.js"></script>

    <!-- link css bootstrap -->
    <link rel="stylesheet" href="bootstrap/bootstrap-4.6.0-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-4.6.0-dist/css/bootstrap.css">
    <!-- link font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <!-- link style css -->
    <link rel="stylesheet" href="style/addVoucher-style/addVoucher.css">

    <!-- link style css style-for-adminShop -->
    <link rel="stylesheet" href="style/bootstrap-admin.css">


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- bootstrap 5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <!-- Part 1: Header -->
    <nav id="header-top" class="sb-topnav navbar navbar-expand navbar-dark py-4">
        <!-- Part 1.1: Navbar Brand-->
        <!-- Part 1.1.1: Logo - image -->
        <a class="navbar-brand ps-3" href="{{ asset('home') }}">
            <svg width="125" height="43" viewBox="0 0 125 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_39_477)">
                    <path
                        d="M8.998 23.652L6.886 23.63C6.28467 23.63 5.82267 23.6373 5.5 23.652C5.26533 25.7053 5.148 27.37 5.148 28.646C5.148 29.922 5.192 30.8167 5.28 31.33C4.81067 31.3593 4.50267 31.374 4.356 31.374C3.52 31.374 2.91867 31.2273 2.552 30.934C2.18533 30.6407 2.002 30.1273 2.002 29.394C2.002 28.646 2.20733 26.864 2.618 24.048C2.14867 24.1947 1.804 24.3193 1.584 24.422C1.55467 24.0993 1.54 23.8573 1.54 23.696C1.54 22.684 2.002 22.0533 2.926 21.804C3.20467 19.7947 3.37333 18.0567 3.432 16.59C2.684 16.59 2.20733 16.4873 2.002 16.282C1.81133 16.0767 1.716 15.622 1.716 14.918C1.77467 14.258 1.83333 13.8253 1.892 13.62C3.54933 13.84 5.368 13.95 7.348 13.95C9.328 13.95 11.242 13.774 13.09 13.422C12.8847 14.962 11.946 15.886 10.274 16.194C9.36467 16.37 8.06667 16.4873 6.38 16.546C6.36533 16.7367 6.15267 18.4453 5.742 21.672C6.59267 21.7013 7.172 21.716 7.48 21.716C8.87333 21.716 9.86333 21.474 10.45 20.99C10.4793 21.2833 10.494 21.5033 10.494 21.65C10.494 22.9847 9.99533 23.652 8.998 23.652ZM16.2037 23.85C16.7317 21.9433 17.3624 20.5427 18.0957 19.648C18.8437 18.7387 19.533 18.284 20.1637 18.284C20.809 18.284 21.293 18.526 21.6157 19.01C21.9384 19.4793 22.0997 20.0953 22.0997 20.858C22.0997 21.606 21.8724 22.2953 21.4177 22.926C20.9777 23.5567 20.369 23.872 19.5917 23.872C19.3864 23.872 19.1444 23.8133 18.8657 23.696C19.3204 23.124 19.5477 22.4347 19.5477 21.628C19.5477 21.1587 19.357 20.924 18.9757 20.924C18.697 20.924 18.3964 21.122 18.0737 21.518C17.751 21.8993 17.443 22.4347 17.1497 23.124C16.8564 23.7987 16.607 24.6713 16.4017 25.742C16.211 26.798 16.1157 27.9273 16.1157 29.13C16.1157 29.2767 16.1524 29.9 16.2257 31C15.7564 31.0293 15.4557 31.044 15.3237 31.044C14.4877 31.044 13.8864 30.8973 13.5197 30.604C13.153 30.3107 12.9697 29.8267 12.9697 29.152C12.9697 28.8587 13.1237 27.7293 13.4317 25.764C13.7397 23.7987 13.8937 22.2367 13.8937 21.078C13.8937 19.9047 13.769 18.8267 13.5197 17.844C14.5904 18.1813 15.3384 18.6653 15.7637 19.296C16.189 19.912 16.4017 20.638 16.4017 21.474C16.4017 22.2953 16.3357 23.0873 16.2037 23.85ZM28.0153 25.588C27.3113 25.588 26.6219 25.5073 25.9473 25.346C25.9326 25.4927 25.9253 25.72 25.9253 26.028C25.9253 27.2453 26.1526 28.162 26.6073 28.778C27.0619 29.394 27.6046 29.702 28.2353 29.702C28.8659 29.702 29.4673 29.5113 30.0393 29.13C30.6113 28.7487 31.1099 28.2207 31.5353 27.546C32.0633 27.6633 32.3273 27.9347 32.3273 28.36C31.0366 30.34 29.3719 31.33 27.3333 31.33C26.1013 31.33 25.0233 30.8607 24.0993 29.922C23.1753 28.9687 22.7133 27.6487 22.7133 25.962C22.7133 24.7007 22.9553 23.5053 23.4393 22.376C23.9233 21.232 24.6933 20.2713 25.7493 19.494C26.8053 18.702 27.9713 18.306 29.2473 18.306C30.5379 18.306 31.4839 18.5993 32.0853 19.186C32.6866 19.7727 32.9873 20.5427 32.9873 21.496C32.9873 22.8747 32.5033 23.9013 31.5353 24.576C30.5819 25.2507 29.4086 25.588 28.0153 25.588ZM28.9393 19.67C28.1913 19.67 27.5606 20.132 27.0473 21.056C26.5339 21.98 26.1966 23.102 26.0353 24.422H26.3653C27.6413 24.422 28.5799 24.092 29.1813 23.432C29.7973 22.772 30.1053 21.98 30.1053 21.056C30.1053 20.6747 30.0026 20.352 29.7973 20.088C29.6066 19.8093 29.3206 19.67 28.9393 19.67ZM40.1718 19.604C39.7612 19.604 39.3945 19.7433 39.0718 20.022C38.7492 20.286 38.5878 20.6673 38.5878 21.166C38.5878 21.6647 38.7565 22.134 39.0938 22.574C39.4458 23.014 39.8712 23.4027 40.3698 23.74C40.8685 24.0627 41.3672 24.4 41.8658 24.752C42.3792 25.0893 42.8265 25.5147 43.2078 26.028C43.5892 26.5267 43.8018 27.084 43.8458 27.7C43.8458 28.756 43.3912 29.6433 42.4818 30.362C41.5725 31.0807 40.4432 31.44 39.0938 31.44C37.7445 31.44 36.6812 31.1687 35.9038 30.626C35.1412 30.0833 34.7598 29.46 34.7598 28.756C34.7598 28.052 34.9725 27.4873 35.3978 27.062C35.8378 26.622 36.3805 26.402 37.0258 26.402C37.3632 26.402 37.6785 26.4607 37.9718 26.578C37.5025 27.0767 37.2678 27.6047 37.2678 28.162C37.2678 28.7193 37.4218 29.1667 37.7298 29.504C38.0378 29.8413 38.4558 30.01 38.9838 30.01C39.5118 30.01 39.9518 29.878 40.3038 29.614C40.6705 29.3353 40.8538 28.9833 40.8538 28.558C40.8538 28.118 40.7292 27.7293 40.4798 27.392C40.2305 27.0547 39.9152 26.7613 39.5338 26.512C39.1672 26.248 38.7638 25.9547 38.3238 25.632C37.8838 25.3093 37.4732 24.9867 37.0918 24.664C36.7252 24.3267 36.4172 23.9087 36.1678 23.41C35.9185 22.8967 35.7938 22.3393 35.7938 21.738C35.7938 20.6967 36.2192 19.846 37.0698 19.186C37.9352 18.5113 39.0058 18.174 40.2818 18.174C41.5725 18.174 42.5112 18.4233 43.0978 18.922C43.6992 19.4207 43.9998 20.0073 43.9998 20.682C43.9998 21.342 43.7872 21.9067 43.3618 22.376C42.9512 22.8453 42.4158 23.08 41.7558 23.08C41.4332 23.08 41.0665 23.014 40.6558 22.882C40.9785 22.6033 41.2278 22.288 41.4038 21.936C41.5798 21.5693 41.6678 21.21 41.6678 20.858C41.6678 20.506 41.5212 20.2127 41.2278 19.978C40.9345 19.7287 40.5825 19.604 40.1718 19.604ZM49.5428 24.202C50.0268 22.5447 50.7821 21.1513 51.8088 20.022C52.8355 18.878 53.7888 18.306 54.6688 18.306C55.5635 18.306 56.1941 18.5773 56.5608 19.12C56.9421 19.648 57.1328 20.374 57.1328 21.298C57.1328 22.2073 56.9861 23.4907 56.6928 25.148C56.4141 26.8053 56.2748 28.0153 56.2748 28.778C56.2748 29.526 56.3701 30.076 56.5608 30.428C56.7515 30.7653 57.0741 31.0587 57.5288 31.308C57.3381 31.3227 57.0668 31.33 56.7148 31.33C55.4828 31.33 54.6028 31.1393 54.0748 30.758C53.5615 30.3767 53.3048 29.7093 53.3048 28.756C53.3048 28.2133 53.4515 27.1573 53.7448 25.588C54.0381 24.004 54.1848 22.8233 54.1848 22.046C54.1848 21.078 53.8915 20.594 53.3048 20.594C52.9528 20.594 52.5641 20.792 52.1388 21.188C51.7135 21.584 51.3028 22.1267 50.9068 22.816C50.5255 23.4907 50.2028 24.3633 49.9388 25.434C49.6748 26.5047 49.5428 27.5753 49.5428 28.646C49.5428 29.702 49.5868 30.4867 49.6748 31C49.2055 31.0293 48.8975 31.044 48.7508 31.044C47.9148 31.044 47.3135 30.9047 46.9468 30.626C46.5801 30.3327 46.3968 29.8707 46.3968 29.24C46.3968 28.6093 46.5215 27.4067 46.7708 25.632C47.5628 20.176 47.9588 16.0327 47.9588 13.202C47.9588 11.926 47.8708 11.068 47.6948 10.628C48.7948 10.9213 49.5428 11.3687 49.9388 11.97C50.3495 12.5567 50.5548 13.3927 50.5548 14.478C50.5548 15.2113 50.4081 16.7513 50.1148 19.098C49.8361 21.4447 49.6455 23.146 49.5428 24.202ZM67.6289 23.652L65.5169 23.63C64.9155 23.63 64.4535 23.6373 64.1309 23.652C63.8962 25.7053 63.7789 27.37 63.7789 28.646C63.7789 29.922 63.8229 30.8167 63.9109 31.33C63.4415 31.3593 63.1335 31.374 62.9869 31.374C62.1509 31.374 61.5495 31.2273 61.1829 30.934C60.8162 30.6407 60.6329 30.1273 60.6329 29.394C60.6329 28.646 60.8382 26.864 61.2489 24.048C60.7795 24.1947 60.4349 24.3193 60.2149 24.422C60.1855 24.0993 60.1709 23.8573 60.1709 23.696C60.1709 22.684 60.6329 22.0533 61.5569 21.804C61.8355 19.7947 62.0042 18.0567 62.0629 16.59C61.3149 16.59 60.8382 16.4873 60.6329 16.282C60.4422 16.0767 60.3469 15.622 60.3469 14.918C60.4055 14.258 60.4642 13.8253 60.5229 13.62C62.1802 13.84 63.9989 13.95 65.9789 13.95C67.9589 13.95 69.8729 13.774 71.7209 13.422C71.5155 14.962 70.5769 15.886 68.9049 16.194C67.9955 16.37 66.6975 16.4873 65.0109 16.546C64.9962 16.7367 64.7835 18.4453 64.3729 21.672C65.2235 21.7013 65.8029 21.716 66.1109 21.716C67.5042 21.716 68.4942 21.474 69.0809 20.99C69.1102 21.2833 69.1249 21.5033 69.1249 21.65C69.1249 22.9847 68.6262 23.652 67.6289 23.652ZM78.0025 19.978C77.0492 19.978 76.1985 20.6233 75.4505 21.914C74.7025 23.19 74.3285 24.466 74.3285 25.742C74.3285 28.4113 75.0179 29.746 76.3965 29.746C77.3792 29.746 78.1785 29.108 78.7945 27.832C79.4105 26.5413 79.7185 25.0967 79.7185 23.498C79.7185 21.1513 79.1465 19.978 78.0025 19.978ZM76.1325 17.998C76.2939 17.998 76.4405 18.0493 76.5725 18.152C76.7192 18.24 76.7925 18.3353 76.7925 18.438C75.3112 19.4647 74.4239 20.8947 74.1305 22.728C74.4385 21.9067 74.8125 21.1953 75.2525 20.594C75.7072 19.9927 76.1765 19.538 76.6605 19.23C77.5845 18.658 78.4865 18.372 79.3665 18.372C80.2465 18.372 80.9945 18.8047 81.6105 19.67C82.2265 20.5353 82.5345 21.694 82.5345 23.146C82.5345 24.774 82.2045 26.27 81.5445 27.634C80.8112 29.174 79.7699 30.2373 78.4205 30.824C77.6579 31.1613 76.8219 31.33 75.9125 31.33C74.6365 31.33 73.5219 30.8387 72.5685 29.856C71.6299 28.8587 71.1605 27.436 71.1605 25.588C71.1605 23.7253 71.6152 22.09 72.5245 20.682C73.4339 19.2593 74.6365 18.3647 76.1325 17.998ZM91.5807 19.978C90.6273 19.978 89.7767 20.6233 89.0287 21.914C88.2807 23.19 87.9067 24.466 87.9067 25.742C87.9067 28.4113 88.596 29.746 89.9747 29.746C90.9573 29.746 91.7567 29.108 92.3727 27.832C92.9887 26.5413 93.2967 25.0967 93.2967 23.498C93.2967 21.1513 92.7247 19.978 91.5807 19.978ZM89.7107 17.998C89.872 17.998 90.0187 18.0493 90.1507 18.152C90.2973 18.24 90.3707 18.3353 90.3707 18.438C88.8893 19.4647 88.002 20.8947 87.7087 22.728C88.0167 21.9067 88.3907 21.1953 88.8307 20.594C89.2853 19.9927 89.7547 19.538 90.2387 19.23C91.1627 18.658 92.0647 18.372 92.9447 18.372C93.8247 18.372 94.5727 18.8047 95.1887 19.67C95.8047 20.5353 96.1127 21.694 96.1127 23.146C96.1127 24.774 95.7827 26.27 95.1227 27.634C94.3893 29.174 93.348 30.2373 91.9987 30.824C91.236 31.1613 90.4 31.33 89.4907 31.33C88.2147 31.33 87.1 30.8387 86.1467 29.856C85.208 28.8587 84.7387 27.436 84.7387 25.588C84.7387 23.7253 85.1933 22.09 86.1027 20.682C87.012 19.2593 88.2147 18.3647 89.7107 17.998ZM101.265 26.556C101.265 28.3013 101.793 29.174 102.849 29.174C103.406 29.174 103.949 28.8733 104.477 28.272C105.005 27.6707 105.43 26.864 105.753 25.852C106.09 24.84 106.376 23.762 106.611 22.618C106.86 21.4593 107.043 20.2347 107.161 18.944C107.366 16.4507 107.469 14.5073 107.469 13.114C107.469 11.706 107.41 10.65 107.293 9.946C108.349 10.1807 109.089 10.6793 109.515 11.442C109.94 12.2047 110.153 13.1653 110.153 14.324C110.153 15.4827 109.903 17.6387 109.405 20.792C108.921 23.9453 108.679 26.248 108.679 27.7C108.679 29.152 108.745 30.384 108.877 31.396C107.835 31.1173 107.117 30.6187 106.721 29.9C106.339 29.1667 106.149 28.25 106.149 27.15C105.694 28.4113 105.012 29.4087 104.103 30.142C103.193 30.8753 102.255 31.242 101.287 31.242C100.319 31.242 99.5268 30.8753 98.9108 30.142C98.3095 29.394 98.0088 28.3013 98.0088 26.864C98.0088 24.5907 98.6321 22.64 99.8788 21.012C101.125 19.3693 102.599 18.548 104.301 18.548C104.785 18.548 105.547 18.6653 106.589 18.9C105.679 19.1347 104.865 19.5453 104.147 20.132C103.443 20.704 102.893 21.364 102.497 22.112C101.675 23.5933 101.265 25.0747 101.265 26.556Z"
                        fill="#487C2A" />
                </g>
                <path
                    d="M65.755 41H64.891V34.7H65.755C66.619 34.7 67.351 35.018 67.951 35.654C68.551 36.29 68.851 37.022 68.851 37.85C68.851 38.678 68.551 39.41 67.951 40.046C67.351 40.682 66.619 41 65.755 41ZM65.755 40.73C66.541 40.73 67.207 40.442 67.753 39.866C68.305 39.284 68.581 38.612 68.581 37.85C68.581 37.088 68.305 36.419 67.753 35.843C67.207 35.261 66.541 34.97 65.755 34.97H65.161V40.73H65.755ZM74.006 41H73.736V37.85H70.496V41H70.226V34.7H70.496V37.58H73.736V34.7H74.006V41ZM75.9514 40.73H79.2634L77.3554 35.483L75.3484 41H75.0604L77.3554 34.691L79.6504 41H75.9514V40.73ZM86.6958 35.78V36.05H84.8058V41H84.5358V36.05H82.6458V35.78H86.6958ZM91.2249 40.469C90.8949 40.883 90.3549 41.09 89.6049 41.09C88.8549 41.09 88.3179 40.877 87.9939 40.451C87.6699 40.025 87.5079 39.338 87.5079 38.39C87.5079 37.442 87.6699 36.755 87.9939 36.329C88.3179 35.903 88.8549 35.69 89.6049 35.69C90.4749 35.69 91.0659 35.975 91.3779 36.545L89.1729 38.39H88.7499L91.0269 36.491C90.7629 36.137 90.2889 35.96 89.6049 35.96C89.3049 35.96 89.0529 35.993 88.8489 36.059C88.6449 36.119 88.4559 36.236 88.2819 36.41C88.1139 36.578 87.9879 36.827 87.9039 37.157C87.8199 37.481 87.7779 37.892 87.7779 38.39C87.7779 38.888 87.8199 39.302 87.9039 39.632C87.9879 39.956 88.1139 40.205 88.2819 40.379C88.4559 40.547 88.6449 40.664 88.8489 40.73C89.0529 40.79 89.3049 40.82 89.6049 40.82C90.2889 40.82 90.7629 40.643 91.0269 40.289L91.2249 40.469ZM93.1406 40.73H96.0746L94.2296 36.383L92.2676 41H91.9796L94.2296 35.69L96.4796 41H93.1406V40.73ZM98.3524 40.73H101.826V36.158L99.8014 38.183L97.7764 36.158V41L97.5064 40.991V35.78H97.7764L99.8014 37.805L101.826 35.78H102.096V41L98.3524 40.991V40.73ZM105.185 35.672C105.929 35.672 106.457 35.837 106.769 36.167L106.589 36.365C106.301 36.083 105.845 35.942 105.221 35.942C104.285 35.942 103.817 36.314 103.817 37.058C103.817 37.346 103.931 37.577 104.159 37.751C104.387 37.919 104.663 38.048 104.987 38.138C105.317 38.228 105.644 38.324 105.968 38.426C106.298 38.522 106.577 38.681 106.805 38.903C107.033 39.119 107.147 39.404 107.147 39.758C107.147 40.172 106.976 40.502 106.634 40.748C106.292 40.994 105.797 41.117 105.149 41.117C104.831 41.117 104.516 41.075 104.204 40.991C103.898 40.907 103.67 40.784 103.52 40.622L103.7 40.424C104.006 40.706 104.477 40.847 105.113 40.847C105.695 40.847 106.133 40.739 106.427 40.523C106.727 40.307 106.877 40.055 106.877 39.767C106.877 39.467 106.763 39.224 106.535 39.038C106.307 38.852 106.028 38.714 105.698 38.624C105.374 38.528 105.047 38.432 104.717 38.336C104.393 38.234 104.117 38.078 103.889 37.868C103.661 37.658 103.547 37.382 103.547 37.04C103.547 36.578 103.7 36.236 104.006 36.014C104.318 35.786 104.711 35.672 105.185 35.672Z"
                    fill="black" />
                <path
                    d="M74.9275 2.51088C70.1359 4.30008 70.4791 7.97508 67.1219 9.63339C64.5952 10.8815 61.0301 10.2494 58.9687 9.71249C58.9687 9.71249 57.5717 10.8346 56.5696 12.3305C56.2341 12.8324 54.7612 12.2794 55.0197 11.8545C58.2955 6.47498 69.4407 3.79118 69.4407 3.79118C69.4407 3.79118 61.5768 3.57908 56.321 7.94918C56.1802 6.95098 55.947 4.25038 60.017 2.59418C65.5346 0.346481 76.0462 2.09368 74.9275 2.51088V2.51088Z"
                    fill="#487C2A" />
                <defs>
                    <filter id="filter0_d_39_477" x="0.539978" y="8.94601" width="116.613" height="29.494"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dx="3" dy="3" />
                        <feGaussianBlur stdDeviation="2" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                            values="0 0 0 0 0.308333 0 0 0 0 0.264653 0 0 0 0 0.264653 0 0 0 0.25 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_39_477" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_39_477" result="shape" />
                    </filter>
                </defs>
            </svg>
        </a>


        <!-- Part 1.1.2: Button toggle-->
        <button class="btn btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.857143 7.21875H23.1429C23.6163 7.21875 24 6.82702 24 6.34375V4.15625C24 3.67298 23.6163 3.28125 23.1429 3.28125H0.857143C0.383732 3.28125 0 3.67298 0 4.15625V6.34375C0 6.82702 0.383732 7.21875 0.857143 7.21875ZM0.857143 15.9688H23.1429C23.6163 15.9688 24 15.577 24 15.0938V12.9062C24 12.423 23.6163 12.0312 23.1429 12.0312H0.857143C0.383732 12.0312 0 12.423 0 12.9062V15.0938C0 15.577 0.383732 15.9688 0.857143 15.9688ZM0.857143 24.7188H23.1429C23.6163 24.7188 24 24.327 24 23.8438V21.6562C24 21.173 23.6163 20.7812 23.1429 20.7812H0.857143C0.383732 20.7812 0 21.173 0 21.6562V23.8438C0 24.327 0.383732 24.7188 0.857143 24.7188Z"
                    fill="#216E38" />
            </svg>


        </button>
        <div id="thong-bao" style="position: absolute;top: 60px;display: inline;width: 600px;left: 400px;"
            class="container mt-4">
            <div class="alert alert-success alert-dismissible" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> C??c b???n h??y nh???n n??t "x" b??n ph???i ????? t???t th??ng b??o.
            </div>
            <div class="alert alert-danger alert-dismissible" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Danger!</strong> C??c b???n h??y nh???n n??t "x" b??n ph???i ????? t???t th??ng b??o.
            </div>
        </div>
        <!-- Part 1.1.3: Form for search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0  mx-3">
            <div class="input-group"
                style="overflow: hidden; border: 1.3px solid #216e38; background-color: rgb(255, 255, 255); border-radius: 30px;">
                <input class="form-control border-0 py-0" type="text" placeholder="Search for..."
                    aria-label="Search for..." aria-describedby="btnNavbarSearch"
                    style="background-color: rgb(255, 255, 255);" />
                <button class="btn" id="btnNavbarSearch" type="button"
                    style="background-color: rgb(255, 255, 255);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21 21L16.514 16.506L21 21ZM19 10.5C19 12.7543 18.1045 14.9163 16.5104 16.5104C14.9163 18.1045 12.7543 19 10.5 19C8.24566 19 6.08365 18.1045 4.48959 16.5104C2.89553 14.9163 2 12.7543 2 10.5C2 8.24566 2.89553 6.08365 4.48959 4.48959C6.08365 2.89553 8.24566 2 10.5 2C12.7543 2 14.9163 2.89553 16.5104 4.48959C18.1045 6.08365 19 8.24566 19 10.5V10.5Z"
                            stroke="#216E38" stroke-width="2" stroke-linecap="round" />
                    </svg>

                </button>
            </div>

        </form>
        <!-- Part 1.1.4: Button messenger -->
        <div class="messenger mx-2">
            <button class="bg-transparent border-0">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_39_9)">
                        <path
                            d="M-5.59271e-05 14.5509C-5.59271e-05 6.18656 6.54745 0 14.9999 0C23.4524 0 29.9999 6.18656 29.9999 14.5509C29.9999 22.9106 23.4524 29.1019 14.9999 29.1019C13.4859 29.1019 12.0262 28.9013 10.664 28.5253C10.3978 28.4529 10.1147 28.4754 9.86338 28.5891L6.87463 29.9025C6.6943 29.9826 6.49701 30.0171 6.30019 30.0029C6.10337 29.9887 5.91307 29.9263 5.7461 29.8211C5.57913 29.7159 5.44062 29.5713 5.34281 29.3999C5.245 29.2285 5.19089 29.0357 5.18526 28.8384L5.09713 26.1628C5.09147 26.0019 5.05354 25.8439 4.98557 25.6979C4.91761 25.552 4.82101 25.4213 4.70151 25.3134C3.19763 23.9571 2.0003 22.2956 1.1894 20.4399C0.378502 18.5842 -0.0273224 16.5769 -0.000993427 14.5519L-5.59271e-05 14.5509ZM10.4006 11.8116L6.00088 18.8138C5.56119 19.4728 6.40119 20.2397 7.02651 19.7513L11.7628 16.1625C11.9183 16.0412 12.1098 15.9754 12.307 15.9754C12.5042 15.9754 12.6957 16.0412 12.8512 16.1625L16.3471 18.7894C16.5963 18.9743 16.8809 19.1059 17.1832 19.1759C17.4854 19.246 17.7989 19.2531 18.104 19.1967C18.4091 19.1403 18.6994 19.0217 18.9566 18.8482C19.2139 18.6748 19.4327 18.4502 19.5993 18.1884L23.999 11.1863C24.4387 10.5272 23.5987 9.77531 22.9734 10.2488L18.2371 13.8375C18.0842 13.9586 17.895 14.0244 17.6999 14.0244C17.5049 14.0244 17.3156 13.9586 17.1628 13.8375L13.6621 11.2106C13.4133 11.0225 13.1281 10.8883 12.8245 10.8164C12.521 10.7445 12.2058 10.7365 11.8991 10.7931C11.5923 10.8496 11.3006 10.9693 11.0427 11.1447C10.7847 11.32 10.566 11.5471 10.4006 11.8116V11.8116Z"
                            fill="#216E38" />
                    </g>
                    <defs>
                        <clipPath id="clip0_39_9">
                            <rect width="30" height="30" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

            </button>
        </div>
        <!-- Part 1.1.5: Button Bell -->
        <div class="bell  mx-2">
            <button class="bg-transparent border-0">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24.9049 14.4704C21.0289 6.12849 19.0127 2.95969 12.6802 3.09229C10.4243 3.13819 10.9649 1.45689 9.24455 2.09439C7.52755 2.73189 9.00145 3.66519 7.24365 5.10849C2.31025 9.15959 2.76415 12.9064 5.05235 21.8365C6.01625 25.5986 2.72845 25.7822 4.02895 29.427C4.97925 32.0858 11.9832 33.1993 19.3714 30.4589C26.7613 27.7168 31.4176 22.2751 30.4673 19.6163C29.1668 15.9698 26.5386 17.9826 24.9049 14.4704ZM18.5707 28.2115C11.9713 30.6595 6.54835 29.2213 6.31885 28.5804C5.92445 27.4754 8.44895 23.7932 15.9935 20.9933C23.5381 18.1934 27.749 19.2321 28.1893 20.4646C28.4494 21.1939 25.1718 25.7618 18.5707 28.2115ZM16.4491 22.2717C12.9998 23.5518 10.6028 25.0155 9.04905 26.333C10.1421 27.3258 12.1889 27.5672 14.2272 26.8107C16.8231 25.8502 18.4194 23.6385 17.7887 21.8739L17.7615 21.8127C17.3348 21.9521 16.8979 22.1034 16.4491 22.2717Z"
                        fill="#216E38" />
                </svg>

            </button>
        </div>
        <!-- Part 1.1.6: Button avatar -->
        <div class="avatar  mx-3">
            <div class="div-avatar rounded-circle">
                <img class="img-avatar" src="../image/home-of-store/man.png" alt="">
            </div>
        </div>

    </nav>

    <div id="layoutSidenav" class="main-content">
        <!-- Part 2.1: main - body - left fixel -->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark bg-white" id="sidenavAccordion">
                <!-- Part 2.1: Left menu -->
                <div class="sb-sidenav-menu">
                    <div class="nav mt-4">
                        <!-- Part 2.1.2: Dashboard menu -->
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><span class="iconify mr-3" data-icon="bx:bxs-dashboard"
                                    style="font-size: 20px;"></span></div>
                            Qu???n tr??? vi??n
                        </a>
                        <!-- Part 2.1.3: Product menu -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><span class="iconify mr-3"
                                    data-icon="icon-park-outline:health-products" style="font-size: 20px;"></span></div>
                            S???n ph???m
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <!-- Part 2.1.3.1: Sub menu product -->
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link ml-4" href="{{ route('AdminNongSan') }}">T???t c??? s???n ph??m</a>
                                <a class="nav-link ml-4" href="{{ route('AdminAddNongSan') }}">Th??m s???n ph???m</a>
                                <a class="nav-link ml-4" href="layout-sidenav-light.html">S???a s???n ph???m</a>
                            </nav>
                        </div>
                        <!-- Part 2.1.4: Voucher menu -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><span class="iconify mr-3"
                                    data-icon="fluent:gift-card-16-filled" style="font-size: 20px;"></span></div>
                            Duy???t h??a ????n
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <!-- Part 2.1.4.1: Sub menu DS h??a ????n -->
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed ml-4" href="{{ route('DSHoaDon') }}">
                                    DS h??a ????n
                                </a>

                                <a class=" nav-link collapsed ml-4" href="{{ route('dsHoaDonDaNhanHang') }}">
                                    H??a ????n ???? duy???t
                                </a>

                            </nav>
                        </div>
                        <!-- Part 2.1.5: Employee menu-->
                        <a class="nav-link" href={{ route('AdminKhachHang') }}>
                            <div class="sb-nav-link-icon"><span class="iconify mr-3"
                                    data-icon="clarity:employee-group-solid" style="font-size: 20px;"></span></div>
                            Kh??ch h??ng
                        </a>
                        <!-- Part 2.1.6: Customer menu -->
                        <!-- Part 2.1.3: Product menu -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts_01" aria-expanded="false"
                            aria-controls="collapseLayouts_01">
                            <div class="sb-nav-link-icon"><span class="iconify mr-3"
                                    data-icon="icon-park-outline:health-products" style="font-size: 20px;"></span></div>
                            Nh??n vi??n
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <!-- Part 2.1.3.1: Sub menu product -->
                        <div class="collapse" id="collapseLayouts_01" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link ml-4" href="{{ route('AdminNhanVien') }}">DS Nh??n vi??n<nav></nav>
                                </a>
                                <a class="nav-link ml-4" href="{{ route('AdminAddNongSan') }}">Th??m nh??n vi??n</a>
                                <!-- <a class="nav-link ml-4" href="layout-sidenav-light.html">S???a s???n ph???m</a> -->
                            </nav>
                        </div>


                        <!-- Part 2.1.7: Order menu -->
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><span class="iconify mr-3" data-icon="mdi:cart-heart"
                                    style="font-size: 20px;"></span></div>
                            Gi??? h??ng
                        </a>
                        <!-- Part 2.1.8: Statistics menu -->
                        <a class="nav-link" href="{{asset('http://localhost/FreshFoodLaravel/public/admin/thongke')}}">
                            <div class="sb-nav-link-icon"><span class="iconify mr-3" data-icon="wpf:statistics"
                                    style="font-size: 20px;"></span></div>
                            Th???ng k??
                        </a>
                        <!-- Part 2.1.9: Profile menu -->
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><span class="iconify mr-3"
                                    data-icon="healthicons:ui-user-profile" style="font-size: 20px;"></span></div>
                            C?? nh??n
                        </a>
                    </div>
                </div>

            </nav>

        </div>

        <!-- Part 2.2: Ph???n n???i dung ch??nh - ???????c thay ?????i  -->

        @yield('add-nongsan')
    </div>
    <!-- Part 2: Main - body -->
    <script>
        var boxThongBao = document.getElementById('thong-bao');

        function thongBao(tyle, noidung) {

            var div = document.createElement('div');

            div.className = 'alert ' + tyle + '  alert-dismissible';
            div.innerHTML =
                '<button type="button" class="close" data-dismiss="alert">&times;</button> <strong>Th??ng b??o!</strong> ' +
                noidung + '';


            boxThongBao.append(div);
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('js/home_of_store.js') }}"></script>
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/bootstrap-4.6.0-dist/js/bootstrap.js') }}"></script>
</body>

</html>
