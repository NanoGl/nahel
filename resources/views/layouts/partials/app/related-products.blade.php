<div>
    <div class="flex flex-col gap-2">
        <h1 class="text-3xl font-bold">
            Productos Relacionados
        </h1>
        <div class="bg-[var(--variable-primary)] h-2 w-24"></div>
    </div>
    <div class="mt-10">
        <div x-data="{
            skip: 1,
            atBeginning: true,
            atEnd: false,
            next() {
                this.$refs.container.scrollBy({ left: this.$refs.container.clientWidth * this.skip, behavior: 'smooth' })
            },
            prev() {
                this.$refs.container.scrollBy({ left: -this.$refs.container.clientWidth * this.skip, behavior: 'smooth' })
            },
            update() {
                this.atBeginning = this.$refs.container.scrollLeft <= 0
                this.atEnd = this.$refs.container.scrollLeft + this.$refs.container.clientWidth >= this.$refs.container.scrollWidth
            }
        }" class="relative w-full">

            <div x-ref="container" @scroll.debounce.5ms="update"
                class="flex gap-6 overflow-x-auto scrollbar-hide snap-x snap-mandatory touch-pan-x">
                @foreach ($relatedProducts as $relatedProduct)
                    <div class="card items-center flex flex-col m-2 w-[25%] justify-between">
                        <div class="h-full flex justify-center items-center">
                            <figure>
                                <img class="" src="{{ $relatedProduct['IMG'] }}?v={{ time() }}"
                                    alt="">
                            </figure>
                        </div>
                        <span class="uppercase">
                            {{ $relatedProduct['DESCRIPCION'] }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
