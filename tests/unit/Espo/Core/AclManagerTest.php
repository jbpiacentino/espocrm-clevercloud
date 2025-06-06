<?php
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM – Open Source CRM application.
 * Copyright (C) 2014-2025 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

namespace tests\unit\Espo\Core;

use Espo\Core\{
    Acl\Permission,
    AclManager,
    Acl\Table,
    Acl\AccessChecker\AccessCheckerFactory,
    Acl\OwnershipChecker\OwnershipCheckerFactory,
    Acl\OwnerUserFieldProvider,
    Acl\Table\TableFactory,
    Acl\GlobalRestriction,
    Acl\Map\MapFactory,
    ORM\EntityManager};

use Espo\Entities\{
    User,
};

class AclManagerTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var AclManager
     */
    private $aclManager;

    /**
     * @var AccessCheckerFactory
     */
    private $accessCheckerFactory;

    /**
     * @var OwnershipCheckerFactory
     */
    private $ownershipCheckerFactory;

    /**
     * @var TableFactory
     */
    private $tableFactory;

    /**
     * @var GlobalRestriction
     */
    private $globalRestriction;

    /**
     * @var User
     */
    private $user;

    private $mapFactory;

    protected function setUp(): void
    {
        $this->user = $this->createMock(User::class);
        $this->table = $this->createMock(Table::class);

        $this->accessCheckerFactory = $this->createMock(AccessCheckerFactory::class);
        $this->ownershipCheckerFactory = $this->createMock(OwnershipCheckerFactory::class);
        $this->tableFactory = $this->createMock(TableFactory::class);
        $this->mapFactory = $this->createMock(MapFactory::class);
        $this->globalRestriction = $this->createMock(GlobalRestriction::class);

        $this->aclManager = new AclManager(
            $this->accessCheckerFactory,
            $this->ownershipCheckerFactory,
            $this->tableFactory,
            $this->mapFactory,
            $this->globalRestriction,
            $this->createMock(OwnerUserFieldProvider::class),
            $this->createMock(EntityManager::class)
        );
    }

    private function initTableFactory(User $user, Table $table): void
    {
        $this->tableFactory
            ->expects($this->once())
            ->method('create')
            ->with($user)
            ->willReturn($table);
    }

    public function testGetPermissionLevel1(): void
    {
        $this->initTableFactory($this->user, $this->table);

        $this->table
            ->expects($this->once())
            ->method('getPermissionLevel')
            ->with(Permission::ASSIGNMENT)
            ->willReturn(Table::LEVEL_YES);

        $this->aclManager->getPermissionLevel($this->user, Permission::ASSIGNMENT);
    }

    public function testGetPermissionLevel2(): void
    {
        $this->initTableFactory($this->user, $this->table);

        $this->table
            ->expects($this->once())
            ->method('getPermissionLevel')
            ->with(Permission::ASSIGNMENT)
            ->willReturn(Table::LEVEL_YES);

        $this->aclManager->getPermissionLevel($this->user, Permission::ASSIGNMENT);
    }
}
