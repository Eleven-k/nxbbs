@if ($tops)
<ul class="post_list">
  @foreach ($tops as $top)
  <li class="post_item">


    <div class="media-body">

      <div class="media-heading mt-0 mb-1">
        <h2 class="post_title">
          <a href="{{ $top->link() }}" title="{{ $top->title }}">
            {{ $top->title }}   <i class="fa fa-star" aria-hidden="true"></i>
          </a>
        </h2>
        <p check-reduce="" class="post_desc">{{ $top->excerpt }}</p>
      </div>

      <small class="media-body meta text-secondary">
        <a href="{{ route('users.show', [$top->user_id]) }}">
          <img class="post_author_avatar" src="{{ $top->user->avatar }}" title="{{ $top->user->name }}">
        </a>
        <a class="post_author_nickname" href="{{ route('users.show', [$top->user_id]) }}" title="{{ $top->user->name }}">
          {{ $top->user->name }}
        </a>
        <a class="post_group" href="{{ route('categories.show', $top->category_id) }}" title="{{ $top->category->name }}">
          [{{ $top->category->name }}]
        </a>
        <span class="post_time" title="最后活跃于：{{ $top->updated_at }}">{{ $top->updated_at->diffForHumans() }}</span>
      </small>



      <div class="post_info_extend">
        <span class="post_info_meta">
          <i class="far fa-comment"></i>{{ $top->reply_count }}
        </span>
        <span class="post_info_meta">
          <i class="fas fa-eye"></i>6
        </span>
      </div>



    </div>
  </li>

  <hr>

  @endforeach
</ul>
@endif















@if (count($topics))
<ul class="post_list">
  @foreach ($topics as $topic)
  <li class="post_item">


    <div class="media-body">

      <div class="media-heading mt-0 mb-1">
        <h2 class="post_title">
          <a href="{{ $topic->link() }}" title="{{ $topic->title }}">
            {{ $topic->title }}
          </a>
        </h2>
        <p check-reduce="" class="post_desc">{{ $topic->excerpt }}</p>
      </div>

      <small class="media-body meta text-secondary">
        <a href="{{ route('users.show', [$topic->user_id]) }}">
          <img class="post_author_avatar" src="{{ $topic->user->avatar }}" title="{{ $topic->user->name }}">
        </a>
        <a class="post_author_nickname" href="{{ route('users.show', [$topic->user_id]) }}" title="{{ $topic->user->name }}">
          {{ $topic->user->name }}
        </a>
        <a class="post_group" href="{{ route('categories.show', $topic->category_id) }}" title="{{ $topic->category->name }}">
          [{{ $topic->category->name }}]
        </a>
        <span class="post_time" title="最后活跃于：{{ $topic->updated_at }}">{{ $topic->updated_at->diffForHumans() }}</span>
      </small>



      <div class="post_info_extend">
        <span class="post_info_meta">
          <i class="far fa-comment"></i>{{ $topic->reply_count }}
        </span>
        <span class="post_info_meta">
          <i class="fas fa-eye"></i>6
        </span>
      </div>



    </div>
  </li>

  @if ( ! $loop->last)
  <hr>
  @endif

  @endforeach
</ul>

@else
<div class="empty-block">暂无数据 ~_~ </div>
@endif