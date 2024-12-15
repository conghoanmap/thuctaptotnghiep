<?php get_header(); ?>
<main>
  <section class="relative  flex flex-col items-center justify-center text-center text-white py-0 px-3">
    <div class="video-docker absolute top-0 left-0 w-full h-[300px] lg:h-[400px] overflow-hidden"><video
        class="min-w-full min-h-full absolute object-cover"
        src="https://sv.worldlandcorp.vn/wp-content/uploads/2022/07/Hero-BG-WL.mp4" type="video/mp4" autoplay=""
        muted="" loop=""></video></div>
    <div class="video-content py-28 lg:py-36">
      <h1 class="text-2xl lg:text-6xl font-bold">ĐẦU TƯ KHÔNG CÒN QUÁ KHÓ</h1>
      <h3 class="text-xl font-light lg:text-3xl italic">World Land Luôn Đồng Hành Cùng Bạn</h3>
    </div>
  </section>
  <section class="mt-5 py-2 lg:px-10 px-5">
    <div class="flex flex-col gap-4 justify-center mt-5 py-5 items-center">
      <div class="title">
        <h2 class="text-2xl uppercase font-bold text-green-800 dark:text-white text-center">Mua bán sang nhượng</h2>
        <div class="inline-flex items-center justify-center w-full">
          <hr class="w-64 h-1 my-3 bg-gray-200 border-0 rounded dark:bg-gray-700">
          <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900"><svg
              class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="currentColor" viewBox="0 0 18 14">
              <path
                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z">
              </path>
            </svg></div>
        </div>
      </div>
      <div class="project grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5  lg:px-16">
        <?php
        $properties = get_posts(array(
          'post_type' => 'batdongsan',
          'posts_per_page' => 6,
        ));

        foreach ($properties as $property) {
          // Lấy các trường tùy chỉnh của bất động sản
          $title = get_field('tieude', $property->ID);
          $image = get_field('hinhanh', $property->ID);
          $price = get_field('gia', $property->ID);
          $area = get_field('dientich', $property->ID);
          $address = get_field('diachi', $property->ID);
        ?>

          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="<?= get_permalink($property->ID); ?>"><img class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="<?= $image['url'] ?>">
            </a>
            <a
              href="<?= get_permalink($property->ID); ?>">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 "><?php echo $title; ?></h3>
            </a>
            <div class="flex justify-between px-1">
              <div><span class="font-bold text-red-700"><strong>Giá bán: </strong><?php echo $price; ?></span></div>
              <div><span class="font-bold text-red-700"><strong>Diện tích: </strong><?php echo $area; ?> m²</span></div>
            </div>
            <hr>
            <div class="flex gap-2 items-center">
              <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                </svg></div>
              <p class="text-small"><?php echo $address; ?></p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
      <div class="mt-5 "><a href="#"><button
            class="bg-green-800 px-5 py-3 text-white rounded-xl hover:scale-90 duration-500 ease-in-out">Xem nhiều
            hơn</button></a></div>
    </div>
  </section>
  <section class="mt-5 py-2 lg:px-10 px-5">
    <div class="flex flex-col gap-4 justify-center mt-5 py-5 items-center">
      <div class="title">
        <h2 class="text-2xl uppercase font-bold text-green-800 dark:text-white text-center">Dự án bất động sản</h2>
        <div class="inline-flex items-center justify-center w-full">
          <hr class="w-64 h-1 my-3 bg-gray-200 border-0 rounded dark:bg-gray-700">
          <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900"><svg
              class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="currentColor" viewBox="0 0 18 14">
              <path
                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z">
              </path>
            </svg></div>
        </div>
      </div>
      <div class="project grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5  lg:px-16">
        <?php
        $args = array(
          'post_type'      => 'post',    // Loại bài viết
          'posts_per_page' => 3,         // Số lượng bài viết hiển thị
          'category__not_in' => array(8)
        );
        $query = new WP_Query($args);
        // Bắt đầu Loop
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
            $tieude = get_field('tieude');
            $hinhanh = get_field('hinhanh');
            $mota = get_field('mota'); ?>
            <div
              class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
              <a href=<?php the_permalink(); ?>>
                <img
                  class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                  src="<?= $hinhanh['url']; ?>">
              </a>
              <a
                href=<?php the_permalink(); ?>>
                <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 "><?= $tieude; ?></h3>
              </a>
              <p class=" text-justify line-clamp-3">
                <?= $mota ?>
              </p>
            </div>
          <?php endwhile;
          wp_reset_postdata(); // Reset query
        else : ?>
          <p>Không có bài viết nào!</p>
        <?php endif; ?>
        <!-- <div
                class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
                <a href="/ba-ria-vung-tau-hon-1-000-ty-dong-chinh-trang-truc-duong-thuy-van.html"><img
                    class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                    src="https://sv.worldlandcorp.vn/wp-content/uploads/2024/10/ttxvn-2810-truc-duong-thuy-van-vung-tau-2-7244.jpg-1.webp"></a><a
                  href="/ba-ria-vung-tau-hon-1-000-ty-dong-chinh-trang-truc-duong-thuy-van.html">
                  <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">Bà Rịa-Vũng Tàu: Hơn
                    1.000 tỷ đồng chỉnh trang trục đường Thùy Vân</h3>
                </a>
                <p class=" text-justify line-clamp-3">
                <p>Bà Rịa-Vũng Tàu: Hơn 1.000 tỷ đồng chỉnh trang trục đường Thùy Vân Tổng Quan Dự Án Chỉnh Trang Đường Thùy
                  Vân Với hơn 1.000 tỷ đồng đầu tư, dự án chỉnh trang đường Thùy Vân, trục đường chính dọc bãi biển Bãi Sau,
                  là một bước tiến mới, mang lại nhiều cơ hội phát […]</p>
                </p>
              </div>
              <div
                class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
                <a href="/ba-ria-vung-tau-hon-1-000-ty-dong-chinh-trang-truc-duong-thuy-van.html"><img
                    class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                    src="https://sv.worldlandcorp.vn/wp-content/uploads/2024/10/ttxvn-2810-truc-duong-thuy-van-vung-tau-2-7244.jpg-1.webp"></a><a
                  href="/ba-ria-vung-tau-hon-1-000-ty-dong-chinh-trang-truc-duong-thuy-van.html">
                  <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">Bà Rịa-Vũng Tàu: Hơn
                    1.000 tỷ đồng chỉnh trang trục đường Thùy Vân</h3>
                </a>
                <p class=" text-justify line-clamp-3">
                <p>Bà Rịa-Vũng Tàu: Hơn 1.000 tỷ đồng chỉnh trang trục đường Thùy Vân Tổng Quan Dự Án Chỉnh Trang Đường Thùy
                  Vân Với hơn 1.000 tỷ đồng đầu tư, dự án chỉnh trang đường Thùy Vân, trục đường chính dọc bãi biển Bãi Sau,
                  là một bước tiến mới, mang lại nhiều cơ hội phát […]</p>
                </p>
              </div> -->
      </div>
      <div class="mt-5 "><a href="#"><button
            class="bg-green-800 px-5 py-3 text-white rounded-xl hover:scale-90 duration-500 ease-in-out">Xem nhiều
            hơn</button></a></div>
    </div>
  </section>
</main>
<?php get_footer(); ?>