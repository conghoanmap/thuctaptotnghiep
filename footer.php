	<footer class="footer footer-center p-5 bg-base-200 text-base-content rounded mb-16 lg:mb-0 dark:bg-black border-t-1">
		<div class="grid grid-cols-1 lg:grid-cols-4 gap-2 ">
			<div class="p-5 col-span-2">
				<h4 class="text-xl uppercase font-bold select-none">CÔNG TY BẤT ĐỘNG SẢN WORLD LAND CORP</h4>
				<p class=" text-justify mt-5 select-none">World Land là công ty đi đầu trong lĩnh vực Bất Động Sản, đi đầu về
					phong cách năng động, môi trường làm việc thân thiện chia sẻ, uy tín trong công việc, sáng tạo trong kinh
					doanh.</p>
				<ul class="list-none">
					<li class="mt-5 border-b-1 p-2 rounded-xl w-fit"><a class="flex items-center gap-4"><strong>Văn phòng:
							</strong>383 Đ. Nguyễn Duy Trinh, P. Bình Trưng Tây, TP. Thủ Đức, TP. Hồ Chí Minh</a></li>
					<li class="mt-5  p-2 border-b-1 w-fit rounded-xl"><a class="flex items-center gap-4"><strong>Email:
							</strong>worldlandcorporation@gmail.com</a></li>
					<li class="mt-5  p-2 border-b-1 w-fit rounded-xl"><a class="flex items-center gap-4"><strong>Hotline:
							</strong>0939703355</a></li>
				</ul>
			</div>
			<div class="p-5 col-span-2 lg:col-span-1">
				<div class="border-green-800 border-dashed border-2 p-5 rounded-xl">
					<h4 class="uppercase font-bold text-left">Danh mục đầu tư</h4>
					<!-- gọi widget để hiển thị -->
					<?php
					if (is_active_sidebar('sidebar-widget-1')) : ?>
						<aside class="widget-area list-disc list-inside mt-5">
							<!-- lệnh gọi wg -->
							<?php dynamic_sidebar('sidebar-widget-1'); ?>
						</aside>
					<?php endif; ?>
					<!-- hết -->
				</div>
				<div class="mt-5 border-green-800 border-dashed border-2 p-3 rounded-xl">
					<h4 class="uppercase font-bold">Chính sách điều khoản</h4>
					<!-- gọi widget để hiển thị -->
					<?php
					if (is_active_sidebar('sidebar-widget-2')) : ?>

						<aside class="widget-area list-disc list-inside mt-5">
							<?php dynamic_sidebar('sidebar-widget-2'); ?>
						</aside><!-- .widget-area -->

					<?php endif; ?>
					<!-- hết -->
				</div>
			</div>
			<div class="px-5">
				<?php if (is_active_sidebar('sidebar-widget-fb')) : ?>
					<aside class="widget-area list-disc list-inside mt-5">
						<!-- lệnh gọi wg -->
						<?php dynamic_sidebar('sidebar-widget-fb'); ?>
					</aside>
				<?php endif; ?>
				<?php if (is_active_sidebar('sidebar-widget-map')) : ?>
					<aside class="widget-area list-disc list-inside mt-5">
						<!-- lệnh gọi wg -->
						<?php dynamic_sidebar('sidebar-widget-map'); ?>
					</aside>
				<?php endif; ?>
			</div>
			<div class="flex justify-center my-2 pt-5 border-t-1 gap-2 mt-10 items-center">
				<p class="text-xs">Copyright © 2023 - Made with </p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
					fill="currentColor" class="w-6 h-6 text-red-500 animate-pulse">
					<path
						d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
					</path>
				</svg>
				<p class="text-xs">Bất Động Sản</p>
			</div>
	</footer>
	<ul class="fixed bottom-5 left-5">
		<li class="hotline mb-2"><a href="tel:0930703355" target="_blank" aria-label="Hotline"><img
					class="w-10 rounded-lg hover:scale-125 duration-300 animate-bounce" src="/src/assets/img/OIP-2.jfif"
					alt=""></a></li>
		<li class="zalo"><a href="https://zalo.me/0939703355" target="_blank" rel="nofollow" aria-label="Chat Zalo"><img
					class="w-10 rounded-lg hover:scale-125 duration-300" src="/src/assets/img/OIP.jfif" alt=""></a>
		</li>
	</ul>
	<ul id="menuu"
		class="sm:hidden block z-30 px-6 pt-2 fixed max-w-full top-[var(--navbar-height)] inset-x-0 bottom-0 w-screen flex-col gap-2 overflow-y-auto backdrop-blur-xl backdrop-saturate-150 bg-background/70"
		style="--navbar-height: 4rem; height: calc(100vh - var(--navbar-height) - 1px);">
		<li class="mb-2 text-large data-[active=true]:font-semibold" data-open="true"><a
				class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-large text-foreground no-underline hover:opacity-80 active:opacity-disabled transition-opacity w-full hover:text-blue-600"
				tabindex="0" role="link" href="#">Giới thiệu</a></li>
		<li class="mb-2 text-large data-[active=true]:font-semibold" data-open="true"><a
				class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-large text-foreground no-underline hover:opacity-80 active:opacity-disabled transition-opacity w-full hover:text-blue-600"
				tabindex="0" role="link" href="#">Thông tin dự án</a></li>
		<li class="mb-2 text-large data-[active=true]:font-semibold" data-open="true"><a
				class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-large text-foreground no-underline hover:opacity-80 active:opacity-disabled transition-opacity w-full hover:text-blue-600"
				tabindex="0" role="link" href="#">Blog</a></li>
		<li class="mb-2 text-large data-[active=true]:font-semibold" data-open="true"><a
				class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-large text-foreground no-underline hover:opacity-80 active:opacity-disabled transition-opacity w-full hover:text-blue-600"
				tabindex="0" role="link" href="#">Liên hệ</a></li><a
			class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-medium text-primary no-underline hover:opacity-80 active:opacity-disabled transition-opacity"
			tabindex="0" role="link" href="/dashboard">
			<div
				class="relative max-w-fit inline-flex items-center justify-between box-border whitespace-nowrap px-2 h-8 text-medium rounded-full shadow-lg bg-default text-default-foreground bg-gradient-to-br from-green-500 to-yellow-500 border-small border-white/50 shadow-pink-500/30">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
					class="max-h-[80%] w-6 h-6 text-white">
					<path stroke-linecap="round" stroke-linejoin="round"
						d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59">
					</path>
				</svg><span class="flex-1 font-normal px-2 pl-1 drop-shadow shadow-black text-white">Đăng tin</span>
			</div>
		</a>
	</ul>
	<script>
		const button = document.getElementById("open-close-menu");
		const menu = document.getElementById("menuu");
		button.addEventListener("click", () => {
			menu.classList.toggle("hidden");
		});
	</script>

	<?php wp_footer(); ?>

	</body>

	</html>