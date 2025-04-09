<li class="accordion-item">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$uniq_id}}13" aria-expanded="false" aria-controls="flush-collapse{{$uniq_id}}13">
        {{$parent_name}}
        <span class="expand-icon position-absolute"></span>
    </button>
    <ul  id="flush-collapse{{$uniq_id}}13" class="accordion-collapse list-unstyled mb-0 collapse" data-bs-parent="#{{$id}}">
        @forelse($sub_items as $menu)

            <li>
                <a href="{{ url($menu->link) }}">{{ $menu->label_menu }}</a>
            </li>
        @empty
        @endforelse
    </ul>
</li>
 