<ol class="dd-list">
    @forelse($ch_menus as $menu)
        <li class="dd-item dd3-item" data-id="{{ $menu->id }}" data-label="{{ $menu->label_menu }}"
            data-url="{{ $menu->link }}">
            <div class="item_sh">
                <div class="d-flex align-items-center">
                    <div class="dd-handle dd3-handle w-100"><i class="fa fa-list"></i>
                        <span>{{ $menu->label_menu }}</span></div>
                    <button class="btn-sm btn btn-primary edit-btn">Edit</button>
                </div>
                <div class="item-settings d-none">
                    <form action="" class="pr-4 pl-4 pb-2 pt-2 border">
                        <div class="from-group">
                            <label class="mb-0">Label Name</label>
                            <input type="text" name="navigation_label" class="form-control"
                                   value="{{ $menu->label_menu ?? '' }}"
                                   placeholder="Enter Label Name...">
                            <div class="error text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label class="mb-0">Link</label>
                            <input type="text" name="navigation_link" class="form-control"
                                   value="{{ $menu->link ?? '' }}"
                                   placeholder="Enter URL. /example/etc..">
                            <div class="error text-danger"></div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn-xs btn btn-primary close-btn">Update</button>
                            <a href="{{ route('menu.delete', $menu->id) }}" class="btn-xs btn btn-danger delete-btn">Remove</a>
                            <button type="button" class="btn-xs btn btn-default close-btn">Close</button>
                        </div>
                    </form>
                </div>
            </div>
            @if($menu->children->count() > 0)
                @include('backend.menu.list', ['ch_menus' => $menu->children])
            @endif
        </li>
    @empty
    @endforelse
</ol>