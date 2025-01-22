<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
          'title',
          'fullname',
          'mobile_no',
          'email',
          'alt_email',
          'property_owner',
          'address1',
          'address2',
          'address_city',
          'type_of_activity',
          'scope',
          'remarks',
           'field_inspection_date',
          'neares_pole',
          'tags',
          'public_status',
          'status',
           'date_last_transition',
            'rev_count',
          'PLOC_signatory',
          'PLOC_signatory_position',
          'PLOC_signatory_office',
           'PLOC_approval_date',
           'PLOC_expiration_date',
          'reference',
          'color',
           'due_date',
           'start_date',
          'assignee',
          'assigned_group',
          'other_assignees',
          'created_at',
          'updated_at',
    ];
}
