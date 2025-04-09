<select name="email_account" id="email_account" class="form-control mb-3">
    @forelse($email_accounts as $email_account)
    <option value="{{ $email_account->email_account }}" data-url="{{ route('admin.mailbox.index', ['mailbox_email' => $email_account->email_account]) }}" {{ Auth::user()->default_email == $email_account->email_account ? 'selected' : null }}>{{ $email_account->email_account }}</option>
    @empty
    @endforelse
</select>
<a href="{{ route('admin.mailbox.compose') }}" class="btn btn-primary btn-block mb-3">Compose</a>
<div class="card">
    <div class="card-header">
        <h3 class="card-title m-0 h4">Folders</h3>
    </div>
    <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
            @foreach($folders as $key => $folder)
                @if (!Str::contains($folder['Name'], explode('.',$folder['Name'])[0].'.'))
                    <li class="nav-item">
                        <a href="{{ route('admin.mailbox.index') }}" class="nav-link">
                            <i class="fas fa-inbox"></i> {{ $folder['Name'] }}
                            <span class="badge bg-primary float-right text-white">{{$folder['Count']}}</span>
                        </a>
                    </li>
                @endif
            @endforeach
            <li class="nav-item">
                <a href="{{ route('admin.mailbox.index', 'INBOX.Sent') }}" class="nav-link">
                    <i class="far fa-envelope"></i> Sent
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.mailbox.index', 'INBOX.Drafts') }}" class="nav-link">
                    <i class="far fa-file-alt"></i> Drafts
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.mailbox.index', 'INBOX.Junk') }}" class="nav-link">
                    <i class="fas fa-filter"></i> Junk
{{--                    <span class="badge bg-warning float-right">65</span>--}}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.mailbox.index', 'INBOX.Trash') }}" class="nav-link">
                    <i class="far fa-trash-alt"></i> Trash
                </a>
            </li>
        </ul>
    </div>

</div>