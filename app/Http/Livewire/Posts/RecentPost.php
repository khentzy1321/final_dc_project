<?php

namespace App\Http\Livewire\Posts;
use App\Models\Post;
use Livewire\Component;

class RecentPost extends Component
{
    public $search, $title = 'All';
    public $content, $post_id;

    public function recentPosts (){
        $query = Post::orderBy('id', 'desc')
            ->search($this->search);
            if($this->title != 'All') {
                $query->where('title', $this->title);
            }
            $recents = $query->get();
        return compact('recents');
    }

    public function render()
    {
        return view('livewire.posts.recent-post', $this->recentPosts());
    }
}
