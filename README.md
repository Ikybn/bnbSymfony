# BnB platform

## Entities

### Review

| Property   | Type      | Description | Relationship |
| --------   | ----      | -----------   | ------------ |
| Title      | string    | 50 NOT NULL          | |
| comment    | text      | NOT NULL             | |
| rating     | integer   | NOT NULL             | |
| created_at | datetime  | NOT NULL             | |
| traveller  | ManyToOne | NOT NULL, OrphanTrue | User |
| rooms      | ManyToOne | NOT NULL, OrphanTrue | Room |

### Booking

| Property   | Type      | Description | Relationship |
| --------   | ----      | -----------   | ------------ |
| number     | string    | 50 NOT NULL          | |
| check_in   | datetime  | NOT NULL             | |
| check_out  | datetime  | NOT NULL             | |
| occupants  | integer   | NOT NULL             | |
| created_at | datetime  | NOT NULL             | |
| traveller  | ManyToOne | NOT NULL, OrphanTrue | User |
| room       | ManyToOne | NULL, OrphanTrue | Room |
| review     | OneToOne  | NULL, OrphanTrue | Review |

### Equipment

This entity represents the equipments for a room.

| Property   | Type      | Description | Relationship |
| --------   | ----      | -----------   | ------------ |
| name       | string     | 50 NOT NULL  | ------------ |
| rooms      | ManyToMany | -----------  |    Room      |
