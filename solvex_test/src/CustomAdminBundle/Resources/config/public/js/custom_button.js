pimcore.registerNS("pimcore.plugin.customAdmin");

pimcore.plugin.customAdmin = Class.create(pimcore.plugin.admin, {
    initialize: function() {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function(params, broker) {
        let classificationStore = Ext.getCmp('classificationstore');
        if (classificationStore) {
            let customButton = new Ext.Button({
                text: 'Custom Action',
                handler: function() {
                    pimcore.helpers.loadingShow();
                    Ext.Ajax.request({
                        url: '/custom-action',
                        success: function(response) {
                            pimcore.helpers.showNotification('Success', 'Custom Action was successful', 'success');
                            pimcore.helpers.loadingHide();
                            classificationStore.reload(); // Reload Classification Store
                        },
                        failure: function() {
                            pimcore.helpers.showNotification('Error', 'Action failed', 'error');
                            pimcore.helpers.loadingHide();
                        }
                    });
                }
            });
            classificationStore.add(customButton);
        }
    }
});

new pimcore.plugin.customAdmin();