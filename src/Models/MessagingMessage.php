<?php

declare(strict_types=1);

namespace Liberu\CRM\MobileMessaging\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property string $direction @property string $status @property int $team_id */
final class MessagingMessage extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_mobile_messaging_messages';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['payload' => 'array', 'sent_at' => 'datetime'];
    }
}
