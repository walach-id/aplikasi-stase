<footer class="w-full bg-white text-right p-4">
    Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
</footer>
</div>

</div>

<!-- AlpineJS -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
<script>
    window.Components = {
        customSelect(options) {
            return {
                init() {
                    this.$refs.listbox.focus()
                    this.optionCount = this.$refs.listbox.children.length
                    this.$watch('selected', value => {
                        if (!this.open) return

                        if (this.selected === null) {
                            this.activeDescendant = ''
                            return
                        }

                        this.activeDescendant = this.$refs.listbox.children[this.selected - 1].id
                    })
                },
                activeDescendant: null,
                optionCount: null,
                open: false,
                selected: null,
                value: 1,
                choose(option) {
                    this.value = option
                    this.open = false
                },
                onButtonClick() {
                    if (this.open) return
                    this.selected = this.value
                    this.open = true
                    this.$nextTick(() => {
                        this.$refs.listbox.focus()
                        this.$refs.listbox.children[this.selected - 1].scrollIntoView({
                            block: 'nearest'
                        })
                    })
                },
                onOptionSelect() {
                    if (this.selected !== null) {
                        this.value = this.selected
                    }
                    this.open = false
                    this.$refs.button.focus()
                },
                onEscape() {
                    this.open = false
                    this.$refs.button.focus()
                },
                onArrowUp() {
                    this.selected = this.selected - 1 < 1 ? this.optionCount : this.selected - 1
                    this.$refs.listbox.children[this.selected - 1].scrollIntoView({
                        block: 'nearest'
                    })
                },
                onArrowDown() {
                    this.selected = this.selected + 1 > this.optionCount ? 1 : this.selected + 1
                    this.$refs.listbox.children[this.selected - 1].scrollIntoView({
                        block: 'nearest'
                    })
                },
                ...options,
            }
        },
    }
</script>
