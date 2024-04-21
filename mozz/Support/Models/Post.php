<?php

namespace Mozz\Support\Models;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $photo
 * @property int $is_visible
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property-read User $author
 * @property-read Tag $tags
 */
final class Post extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'posts';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'title',
        'photo',
        'is_visible'
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'posts_tag', 'post_id', 'tag_id');
    }
}
