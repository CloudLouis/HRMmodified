<?php

/**
 * OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures
 * all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * OrangeHRM is free software; you can redistribute it and/or modify it under the terms of
 * the GNU General Public License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA  02110-1301, USA
 */
class requestSubmissionAction extends sfAction {
    
        private $requestSubmissionService;
    
        public function getRequestSubmissionService() {
            if (is_null($this->requestSubmissionService)) {
                $this->requestSubmissionService = new requestSubmissionService();
                $this->requestSubmissionService->setRequestSubmissionDao(new RequestSubmissionDao());
            }
            return $this->requestSubmissionService;
        }
    
        public function setForm(sfForm $form) {
            if (is_null($this->form)) {
                $this->form = $form;
            }
        }
    
        public function execute($request) {
            $sortField = $request->getParameter('sortField');
            $sortOrder = $request->getParameter('sortOrder');
            $this->setForm(new RequestSubmissionForm());
    
            $requestList = $this->getRequestSubmissionService()->getUserRequestList($this->getUser()->getAttribute('user')->getUserId());
            $this->_setListComponent($requestList);
            $params = array();
            $this->parmetersForListCompoment = $params;
            
            if (!empty($sortField) && !empty($sortOrder)){
                $searchClues = array(
                    'sortField' => $sortField,
                    'sortOrder' => $sortOrder,
                );
                $this->form->setDefaultDataToWidgets($searchClues);
            }

            if ($request->isMethod('post')) {
                $this->form->bind($request->getParameter($this->form->getName()));
                if ($this->form->isValid()) {
                    $this->form->save();
                    $this->getUser()->setFlash('success', __(TopLevelMessages::SAVE_SUCCESS));
                    $this->redirect('purchasing/requestSubmission');
                }
            }
        }
    
        private function _setListComponent($requestList) {
    
            $configurationFactory = new RequestSubmissionHeaderFactory();
            ohrmListComponent::setConfigurationFactory($configurationFactory);
            ohrmListComponent::setListData($requestList);
        }
    


}

