<?php

declare(strict_types=1);

namespace Liberu\CRM\MobileMessaging\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property string $address @property string $channel @property string $consent */
final class MessagingContact extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_mobile_messaging_contacts';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['consent_at' => 'datetime', 'metadata' => 'array'];
    }
}
