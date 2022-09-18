<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Peserta
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Peserta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Peserta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Peserta query()
 * @method static \Illuminate\Database\Eloquent\Builder|Peserta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Peserta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Peserta whereUpdatedAt($value)
 */
	class Peserta extends \Eloquent implements \Tymon\JWTAuth\Contracts\JWTSubject {}
}

namespace App\Models{
/**
 * App\Models\Proposal
 *
 * @property int $id
 * @property int $user_id
 * @property string $ink_judul
 * @property string $ink_abstrak
 * @property string $ink_latarbelakang
 * @property string $ink_tujuan
 * @property string $ink_manfaat
 * @property string $ink_metode
 * @property string $ink_keunggulan
 * @property string $ink_penerapan
 * @property string $ink_prospek
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereInkAbstrak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereInkJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereInkKeunggulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereInkLatarbelakang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereInkManfaat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereInkMetode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereInkPenerapan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereInkProspek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereInkTujuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereUserId($value)
 */
	class Proposal extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tenant
 *
 * @property int $id_tenant
 * @property string $nama_tenant
 * @property string $email_tenant
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereEmailTenant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereIdTenant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereNamaTenant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereUpdatedAt($value)
 */
	class Tenant extends \Eloquent implements \Tymon\JWTAuth\Contracts\JWTSubject {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $address
 * @property string|null $phonenumber
 * @property string|null $jenis_anggota
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereJenisAnggota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhonenumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Tymon\JWTAuth\Contracts\JWTSubject {}
}

